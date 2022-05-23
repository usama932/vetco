<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class PetUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Pet',
                    'last_name' => 'Test',
                    'email' => 'pet@pet.com',
                    'phone' => '123',
                    'address' => '123',
                    'city' => '123',
                    'state' => '123',
                    'zip' => '123',
                    'agreement' => '1',
                    'password' => bcrypt('12345678')
        ]);
        $user->attachRole('pet');
    }
}
