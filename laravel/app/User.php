<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //DATI FILLABLE CHE VOGLIO MEMORIZZARE NELLA TABELLA USER
    protected $fillable = [
        'name', 'email', 'password','surname','address','specialization'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relazione con Doctor uno a uno
    public function doctors()
    {
        return $this->hasOne('App\Doctor');
    }

    // creo rapporto uno a molti
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    // creo rapporto uno a molti
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
