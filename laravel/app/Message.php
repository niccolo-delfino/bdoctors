<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  // Fillable per memorizzazione 
  protected $fillable = ['email_user','name','surname','email','phone_num','message'];

  // Creo relazione 1 a molti
  public function user()
  {
    return $this->belongsTo('App\Doctor');
  }
}
