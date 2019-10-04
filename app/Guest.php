<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name', 'surname', 'password'
    ];

    public function planers(){


        return $this->hasOne('App\Planer');
    }
}
