<?php

namespace App\Policies;

use App\Enums\PermissionEnum;
use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasAnyPermission(
            PermissionEnum::ADMIN->value,
            PermissionEnum::PRODUCT_ALL->value,
            PermissionEnum::PRODUCT_INDEX->value);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Product $product): bool
    {
         return $user->hasAnyPermission(
            PermissionEnum::ADMIN->value,
            PermissionEnum::PRODUCT_ALL->value,
            PermissionEnum::PRODUCT_SHOW->value);

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
         return $user->hasAnyPermission(
            PermissionEnum::ADMIN->value,
            PermissionEnum::PRODUCT_ALL->value,
            PermissionEnum::PRODUCT_STORE->value);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Product $product): bool
    {
        return $user->hasAnyPermission(
            PermissionEnum::ADMIN->value,
            PermissionEnum::PRODUCT_ALL->value,
            PermissionEnum::PRODUCT_UPDATE->value);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Product $product): bool
    {
        return $user->hasAnyPermission(
            PermissionEnum::ADMIN->value,
            PermissionEnum::PRODUCT_ALL->value,
            PermissionEnum::PRODUCT_DELETE->value);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Product $product): bool
    {
        return $user->hasAnyPermission(
            PermissionEnum::ADMIN->value,
            PermissionEnum::PRODUCT_ALL->value,
            PermissionEnum::PRODUCT_RESTORE->value);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Product $product): bool
    {
        return $user->hasAnyPermission(
            PermissionEnum::ADMIN->value,
            PermissionEnum::PRODUCT_ALL->value,
            PermissionEnum::PRODUCT_STORE->value);

    }
}
