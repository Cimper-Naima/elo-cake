<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Categorie::create(
            [
                'name' => 'Cupcakes'
            ]
        );

        App\Categorie::create(
            [
                'name' => 'Gâteaux'
            ]
        );
    }
}
