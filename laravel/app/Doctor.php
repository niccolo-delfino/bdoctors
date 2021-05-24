<?php

namespace App;

// use Laravel\Cashier\Billable;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
  // Creo le fil per memorizzazione 
  protected $fillable = ['user_name','specialization','photo','phone_num','cv','office_address','city'];


  // creo rapporto 1 a 1 con user
  public function user(){
    return $this->belongsTo('App\User');
  }

  // creo rapporto molto a molti 
  public function specializations(){
    return $this->belongsToMany('App\Specialization');
  }

  // creo rapporto molti a molti
  public function services(){
    return $this->belongsToMany('App\Service');
  }

  // creo rapporto molti a molti
  public function promos(){
    return $this->belongsToMany('App\Promo')->withPivot('end');
  }
  
}
