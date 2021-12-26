<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@uuzbot.com',
            'password' => bcrypt('nim1306477'),
            'roles' => 'admin',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'vip',
            'email' => 'vip@uuzbot.com',
            'password' => bcrypt('nim1306477'),
            'roles' => 'vip',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@uuzbot.com',
            'password' => bcrypt('nim1306477'),
            'roles' => 'user',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }



}
