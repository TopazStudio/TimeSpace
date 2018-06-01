<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    ];

//Relationships
    //tags
    public function attendingUsers(){
        return $this->morphToMany('App\Models\User', 'attendable');
    }

    public function attendances(){
        return $this->hasMany('App\Models\Attendance', 'attendable_id');
    }
}
