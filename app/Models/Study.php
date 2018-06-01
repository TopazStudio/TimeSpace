<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
//Relationships
    //tags
    public function attendingUsers(){
        return $this->morphToMany('App\Models\User', 'attendable');
    }

    public function attendances(){
        return $this->hasMany('App\Models\Attendance', 'attendable_id');
    }
}
