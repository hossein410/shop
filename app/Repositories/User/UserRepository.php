<?php

namespace App\Repositories\User;


use App\Models\User;
use App\Repositories\BaseRepository;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{



    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function toggle($model, string $field = 'published'): User
    {
        $model->block = !$model->block;
        $model->save();
        return $model;
    }

    public function verifyUser(User $user): User
    {
        $user->mobile_verify_at = now();
        $user->save();
        return $user;
    }

    public function generateToken(User $user): string
    {
        return $user->createToken('token')->plainTextToken;
    }
}
