<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'owner_id',

        'name',
        'type',
        'conclusion',
        'percentage',

        'votable_id',
        'votable_type',
    ];

    /**
     * Retrieve the model(votable model) that owns this Vote.
     */
    //polymorphic relationship
    public function votable(){
        return $this->morphTo();
    }

    //owner
    public function owner(){
        return $this->belongsTo('App\Models\User', 'owner_id');
    }

    //time
    public function time(){
        return $this->morphMany('App\Models\Time', 'timable');
    }

    //voters
    public function voters(){
        return $this->belongsToMany('App\Models\User', 'voters','user_id');
    }
}
