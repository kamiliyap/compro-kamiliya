<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert into table users (name, email, password) values ('Kamiliya', 'kamiliya@example.com', 'password');
        //quiry builder, eloquent
        User::create([
            'name' => 'Kamiliya',
            'email' => 'kamiliyaprasmaisya@gmail.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
