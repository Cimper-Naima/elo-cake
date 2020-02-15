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
                'name' => 'maracu',
                'description'=>'classique insert maracudja',
                'prix'=>'1',
                'categorie_id' => 1
            ]
        );   
         
    }
}
