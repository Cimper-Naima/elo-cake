<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gourmandise extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'prix', 'categorie_id'];

    public function categorie()
    { 
        return $this->belongsTo(Categorie::class); 
    }

}
