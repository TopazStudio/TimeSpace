<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id',
        'time_table_id',

        'name',
        'note',
        'color',
        'description',
    ];

    //#################### CRUD ###################//

    public static function crudSettings()
    {
        return[
            /**
             * Attributes that will be persisted to and from the
             * database
             */
            'attributes' => [
                'name',
                'note',
                'color',
                'description',
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => [
                'owner_id',
                'time_table_id',
            ],

            /**
             * Models authorized to modify this model
             */
            'owner' => [
                'owner_id' => null,
            ]
        ];
    }

    //#################### RELATIONSHIPS ###################//


//Relationships

    public function owner(){
        return $this->belongsTo('App\Models\User', 'owner_id');
    }

    public function timetable(){
        return $this->belongsTo('App\Models\TimeTable', 'time_table_id');
    }

    public function attendingUsers(){
        return $this->morphToMany('App\Models\User', 'attendable');
    }

    public function attendances(){
        return $this->hasMany('App\Models\Attendance', 'attendable_id');
    }

    public function location(){
        return $this->morphOne('App\Models\Location','locatable');
    }

    public function time(){
        return $this->morphOne('App\Models\Time','timable');
    }
}
