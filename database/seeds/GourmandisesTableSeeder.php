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
                'category' => 'cupcake',
                'name'=>'vanilo',
                'description'=>'classique goût vanille',
                'quantity'=>'2',
            ]
        );   
        
        App\Gourmandise::create(
            [
                'category'=>'cupcake',
                'name' => 'maracu',
                'description'=>'classique insert maracudja',
                'quantity'=>'1',
            ]
        );   
         
    }
}
