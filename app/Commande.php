<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public $timestamps = false;
    protected $fillable = ['status', 'user_id'];

    public function gourmandises()
{
    return $this->belongsToMany('App\Gourmandise','commande_gourmandise')
    ->withPivot('quantity');
}

public function user()
    { 
        return $this->belongsTo(User::class); 
    }


}
