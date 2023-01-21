<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Nugraha',
            'email' => 'nugraha@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Dinar',
            'name' => 'Arya',
            'email' => 'dinar@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
        ]);

        User::create([
            'name' => 'Melani',
            'name' => 'Melaniii',
            'email' => 'melani@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
        ]);

        User::create([
            'name' => 'Haddad',
            'name' => 'Haddad',
            'email' => 'haddad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
        ]);

        User::create([
            'name' => 'Radit',
            'name' => 'Raditt',
            'email' => 'radit@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
        ]);

    }
}
