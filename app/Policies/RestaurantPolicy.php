<?php

namespace App\Policies;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RestaurantPolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user, Restaurant $restaurant): bool
    {
        return $restaurant->isOwner($user);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function edit(User $user, Restaurant $restaurant): bool
    {
        return $restaurant->isOwner($user);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Restaurant $restaurant): bool
    {
        return $restaurant->isOwner($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Restaurant $restaurant): bool
    {
        return $restaurant->isOwner($user);
    }
}
