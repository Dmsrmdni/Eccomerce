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
            'no_telepon' => '083948938402',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2004-04-10',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Dinar',
            'name' => 'Arya',
            'email' => 'dinar@gmail.com',
            'email_verified_at' => now(),
            'no_telepon' => '034098938402',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2004-09-12',
            'password' => Hash::make('12345678'), // password
        ]);

        User::create([
            'name' => 'Melani',
            'name' => 'Melaniii',
            'email' => 'melani@gmail.com',
            'email_verified_at' => now(),
            'no_telepon' => '03408479202',
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '2004-09-12',
            'password' => Hash::make('12345678'), // password
        ]);

        User::create([
            'name' => 'Haddad',
            'name' => 'Haddad',
            'email' => 'haddad@gmail.com',
            'email_verified_at' => now(),
            'no_telepon' => '032364738402',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2004-07-02',
            'password' => Hash::make('12345678'), // password
        ]);

        User::create([
            'name' => 'Radit',
            'name' => 'Raditt',
            'email' => 'radit@gmail.com',
            'email_verified_at' => now(),
            'no_telepon' => '03283748402',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2004-11-12',
            'password' => Hash::make('12345678'), // password
        ]);

    }
}
