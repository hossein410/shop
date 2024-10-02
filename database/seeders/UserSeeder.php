<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\ActivationCode;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;

class UserSeeder extends Seeder
{
    use HasRoles;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'             => 'ho3ein',
            'mobile'           => '09192930526',
            'mobile_verify_at' => now(),
            'password'         => 'password',
        ]);


        $admin->syncRoles(RoleEnum::ADMIN->value);
        User::factory(10)->create()->each(function (User $user) {
            ActivationCode::factory(3)->create([
                'user_id' => $user->id
            ]);


            Product::factory(10)->create([
                'user_id' => $user->id
            ]);

        });
    }
}
