<?php

use Illuminate\Database\Seeder;

class CommandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Commande::create(
            [
                'status' => 'Livré',
                'user_id' => 1
            ]
        );
    }
}
