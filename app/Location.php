<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
     function users(){
        return $this->belongsToMany('App\User');
    }
}
