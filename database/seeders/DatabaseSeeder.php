<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'first_name' => 'Admin',
                'last_name' => 'Test',
                'email' => 'admin@admin.com',
                'phone' => '123',
                'address' => '123',
                'city' => '123',
                'state' => '123',
                'zip' => '123',
                'agreement' => '1',
                'password' => Hash::make('12345678'),
            ],
            [
                'first_name' => 'Vet',
                'last_name' => 'Test',
                'email' => 'vet@vet.com',
                'phone' => '123',
                'address' => '123',
                'city' => '123',
                'state' => '123',
                'zip' => '123',
                'agreement' => '1',
                'password' => Hash::make('12345678'),
            ],
            [
                'first_name' => 'Pet',
                'last_name' => 'Test',
                'email' => 'pet@pet.com',
                'phone' => '123',
                'address' => '123',
                'city' => '123',
                'state' => '123',
                'zip' => '123',
                'agreement' => '1',
                'password' => Hash::make('12345678'),
            ],
        ];
        $role = [
            [
                'name' => 'admin',
                'description' => 'Admin'
            ],
            [
                'name' => 'vet',
                'description' => 'Admin'
            ],
            [
                'name' => 'pet',
                'description' => 'Admin'
            ]
        ];
        $role_user =[
            [
                'role_id' => 1,
                'user_id' => 1
            ],
            [
                'role_id' => 2,
                'user_id' => 2
            ],
            [
                'role_id' => 3,
                'user_id' => 3
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

        foreach ($role as $key => $value) {
            Role::create($value);
        }

        foreach ($role_user as $key => $value) {
            RoleUser::create($value);
        }
    }
}
