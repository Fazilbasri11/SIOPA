<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::trucate();
        User::create(
            [


                'name' => 'Mahasiswa',
                'level' => 'user',
                'NPM' => '19081070100',
                'password' => bcrypt('mahasiswa'),
                'remember_token' => Str::random(60),

                'name' => 'AdminAPK',
                'level' => 'admin',
                'NPM' => 'admin',
                'password' => bcrypt('admin'),
                'remember_token' => Str::random(60),
            ]
        );

        
    }
}
