<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country',
        'county',
        'city',
        'street',
        'zip_code',
        'landmarks',

        'Building',
        'floor',
        'room',

        'latitude',
        'longitude',

        'locatable_id',
        'locatable_type',
    ];

    /**
     * Retrieve the model(locatable model) that owns this location.
     */
    //polymorphic relationship
    public function locatable(){
        return $this->morphTo();
    }
}
