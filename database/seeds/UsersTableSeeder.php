<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'bert@bert.nl')->first();
        if (!$user) {
            User::create([
                'name' => 'bert',
                'email' => 'bert@bert.nl',
                'role' => 'admin',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
