<?php

use Illuminate\Database\Seeder;

class GourmandisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Gourmandise::create(
            [
                'name' => 'vanilo',
                'category'=>'cupcake',
                'description'=>'classique goût vanille',
                'quantity'=>'2',
            ]
        );   
        
        App\Gourmandise::create(
            [
                'name' => 'maracu',
                'category'=>'cupcake',
                'description'=>'classique insert maracudja',
                'quantity'=>'1',
            ]
        );   
         
    }
}
