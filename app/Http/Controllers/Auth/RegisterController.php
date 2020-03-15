<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\VerifyUser;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\VerifyUser as VerifyUserNotifs;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $user = User::count();
        return view('auth.register', compact('user'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'phone' => 'nullable|required|numeric|min:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if($data['role'] === 'admin') {
            $role = Role::whereName('admin')->first();
            $user->roles()->attach($role);
        } else {
            $role = Role::whereName('user')->first();
            $user->roles()->attach($role);
        }

        if (file_exists($data['profile'])) {
            $image = $data['profile'];
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('profile/'.$user->id.'/');
            $image->move($destinationPath, $name);
            $user->image = '/profile/'.$user->id.'/'.$name;
            $user->save();
        }

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        $user->notify(new VerifyUserNotifs());

        return $user;
    }

    public function registered(Request $request, $user)
    {
        \Auth::logout();

        return response()->json([
            'success'=> true,
            'user' => $user
        ]);
    }

    public function resendNotification(Request $request)
    {
        $user = User::whereEmail($request->email)->first();

        if(isset($user)){
            $verifyUser = $user->verifyUser;
            
            if(!$user->verified) {
                $user->notify(new VerifyUserNotifs());
                $status = "Resend the verification link. Check your mail.";
            } else {
                $status = "Your Email is already verified. You can now login.";
            }
        } else {
            flash()->warning('Sorry your Email cannot be identified.');
            return redirect('/login');
        }

        flash()->success($status);
        return redirect('/login');
    }

    public function getResendNotification()
    {
        return view('auth.verify');
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::whereToken($token)->first();
      
        if(isset($verifyUser)) {
            $user = $verifyUser->user;
            
            if(!$user->verified) {
                $user->verified = true;
                $user->save();
                $status = "Your Email is verified. You can now login.";
            } else {
                $status = "Your Email is already verified. You can now login.";
            }
        } else {
            flash()->warning('Sorry your Email cannot be identified.');
            return redirect('/login');
        }
    
        flash()->success($status);
        return redirect('/login');
    }
}
