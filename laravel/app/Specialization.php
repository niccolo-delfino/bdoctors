<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
  // creo rapporto molti a molti
  public function doctors(){
    return $this->belongsToMany('App\Doctor');
  }
}
