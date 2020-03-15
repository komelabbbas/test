<?php

namespace App\Policies;

use App\User;
use App\User as ProfileUser;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->hasPermission('view_profile');
    }

    /**
     * Determine whether the user can create users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermission('create_profile');
    }

    /**
     * Determine whether the user can update the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $user
     * @return mixed
     */
    public function update(User $user, ProfileUser $profileUser)
    {
        if($profileUser->id === $user->id) {
            return $user->hasPermission('edit_profile');
        }
        return false;
    }

    /**
     * Determine whether the user can delete the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $user, ProfileUser $profileUser)
    {
        if($profileUser->id === $user->id) {
             return $user->hasPermission('delete_profile');
        }
        return false;
    }
}
