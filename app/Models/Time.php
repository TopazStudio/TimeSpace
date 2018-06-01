<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'timable_id',
        'timable_type',

        'start_time',
        'end_time',
    ];

    /**
     * Retrieve the model(timable model) that owns this TimeSpace.
     */
    //polymorphic relationship
    public function timable(){
        return $this->morphTo();
    }

}
