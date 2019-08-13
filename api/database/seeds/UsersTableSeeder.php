<?php

use Module\ErgoLunaKernel\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::query()->insert([
            [
                'name' => 'Ben Borla',
                'email' => 'benborla@icloud.com',
                'password' => bcrypt('admin123'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

