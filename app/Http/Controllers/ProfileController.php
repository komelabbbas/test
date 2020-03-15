<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = auth()->user();

        $this->authorize('update', $user);

        return view('admin.profile.edit', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);

        $this->authorize('update', $user);

        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'phone' => 'nullable|numeric|min:10',
            'email' => 'required|string|email|max:255|unique:users,id,'.$user->id,
            'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
       
        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('profile/'.$user->id.'/');
            $image->move($destinationPath, $name);
            $user->image = '/profile/'.$user->id.'/'.$name;
        }

        $user->save();

        $verifyUser = $user->verifyUser;
         
        $verifyUser->user_id = $user->id;
        $verifyUser->token = str_random(40);
        $verifyUser->save();

        flash()->warning('Profile Updated Successfully.');

        return response()->json([
            'success' => true
        ]);
    }

    public function removeImage()
    {
        $user = auth()->user();
     
        if(file_exists(public_path($user->image)))
        {
            unlink(public_path($user->image));
        }

        $user->image = null;
        $user->save();

        return response()->json([
            'success' => true
        ]);
    }
}
