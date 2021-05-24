<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'name', 'price','duration'
    ];

    // creo rapporto molti a molti
    public function doctors(){
        return $this->belongsToMany('App\Doctor');
    }
}
