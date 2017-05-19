<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatabl

class PuntosModel extends Model
{
    //
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
     */
    
     protected $table = 'ClicksBoton';
    protected $fillable = [
        'click',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       //
    ];
}
