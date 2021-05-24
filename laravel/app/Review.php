<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  // Fillable per memorizzazioni
  protected $fillable = ['user_id','email_user','text','vote'];

  // creo relazione 1 a  molti
  public function user()
  {
    return $this->belongsTo('App\Doctor');
  }
}
