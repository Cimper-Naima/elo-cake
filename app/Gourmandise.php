<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gourmandise extends Model
{
    public $timestamps = false;
    protected $fillable = ['category', 'name', 'description', 'quantity'];

}
