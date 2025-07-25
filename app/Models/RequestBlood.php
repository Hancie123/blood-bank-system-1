<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestBlood extends Model
{
    protected $guarded = ['id'];

    public function state(){
        return $this->belongsTo(State::class,'state_id');
    }

    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }
}