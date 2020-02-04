<?php

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
        App\User::create(
            [
                'name' => 'na',
                'email' => 'cimper.naima@gmail.com',
                'password' => bcrypt('pass'),
            ]
        );

        App\User::create(
            [
                'name' => 'kath',
                'email' => 'kathleen.malialin@gmail.com',
                'password' => bcrypt('pass'),
            ]
        );
    }
}
