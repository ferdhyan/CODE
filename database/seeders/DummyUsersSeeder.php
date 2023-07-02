<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $userData = [
            [
                'name'=>'Mas Operator',
                'email'=>'operator@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('12345')
            ],

            [
                'name'=>'Mas Keuangan',
                'email'=>'keuangan@gmail.com',
                'role'=>'keuangan',
                'password'=>bcrypt('12345')
            ],

            [
                'name'=>'Mas Marketing',
                'email'=>'marketing@gmail.com',
                'role'=>'marketing',
                'password'=>bcrypt('12345')
            ],
        ];

       foreach ($userData as $key =>$val) {
            User::create($val);
       }

    }
}
