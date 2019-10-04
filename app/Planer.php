<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planer extends Model
{
    //
//    public static function create(array $array)
//    {
//    }
    protected $fillable = [
        'name', 'guest_id'
    ];



    public function guest(){

        return $this->belongsTo('App\Guest');
    }
}
