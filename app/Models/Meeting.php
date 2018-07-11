<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
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
        'summary',
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
                'summary',
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

    //owner
    public function owner(){
        return $this->belongsTo('App\Models\User','owner_id');
    }

    //owner
    public function timetable(){
        return $this->belongsTo('App\Models\TimeTable','time_table_id');
    }

    //pictures
    public function pictures(){
        return $this->morphMany('App\Models\Picture','picturable');
    }

    //documents
    public function documents(){
        return $this->morphMany('App\Models\Document','documentable');
    }

    //attending users
    public function attendingUsers(){
        return $this->morphToMany('App\Models\User', 'attendable','attendances');
    }

    //attendance
    public function attendances(){
        return $this->morphMany('App\Models\Attendance', 'attendable');
    }

    //time //many for agendas
    public function time(){
        return $this->morphOne('App\Models\Time', 'timable');
    }

    //location
    public function location(){
        return $this->morphOne('App\Models\Location', 'locatable');
    }

    //tags
    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable','tagged');
    }

    //time
    public function vote(){
        return $this->morphOne('App\Models\Vote', 'votable');
    }
}
