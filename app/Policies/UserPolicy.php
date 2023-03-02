<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email === 'phpaivamotta@gmail.com';
    }

    /**
     * Determine whether the user can edit models.
     */
    public function edit(User $user, User $model): bool
    {
        return (bool) mt_rand(0, 1);
    }
}
