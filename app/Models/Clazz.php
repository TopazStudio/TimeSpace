<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clazz extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id',
        'time_table_id',
        'teacher_id',

        'name',
        'note',
        'abbreviation',
        'color',
        'description',
    ];

    //###################  CRUD ##################//

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
                'abbreviation',
                'color',
                'description',
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => [
                'owner_id',
                'teacher_id',
                'time_table_id'
            ],

            /**
             * Models authorized to modify this model
             */
            'owner' => [
                'owner_id' => null,
            ]
        ];
    }

    //###################  RELATIONSHIPS ##################//

    //attending users
    public function attendingUsers(){
        return $this->morphToMany('App\Models\User', 'attendable');
    }

    //attendances
    public function attendances(){
        return $this->morphMany('App\Models\Attendance', 'attendable');
    }

    //attending users
    public function teacher(){
        return $this->belongsTo('App\Models\User', 'teacher_id');
    }

    //attending users
    public function owner(){
        return $this->belongsTo('App\Models\User', 'owner_id');
    }

    //attending users
    public function time_table(){
        return $this->belongsTo('App\Models\TimeTable', 'time_table_id');
    }

    //location
    public function location(){
        return $this->morphOne('App\Models\Location','locatable');
    }

    //time
    public function time(){
        return $this->morphOne('App\Models\Time','timable');
    }
}
