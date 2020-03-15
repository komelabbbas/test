<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verifyUser()
    {
        return $this->hasOne(VerifyUser::class);
    }

    public function isAdmin()
    {
        return true;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function isSuperAdmin()
    {
        return $this->roles()->whereName('admin')->first() ? true : false;
    }

    public function hasPermission($permission)
    { 
        $role = $this->roles()->whereHas('permissions', function($q) use ($permission){
            return $q->whereSlug($permission);
        })->first();

        if($role) {
            return true;
        }
        return false;
    }
}
