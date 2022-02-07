<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function employee(User $user)
    {
        return $user->role == '0';
    }


    public function employer(User $user)
    {
        return $user->role == '1';
    }

    public function admin(User $user)
    {
        return $user->role == '2';
    }

}
