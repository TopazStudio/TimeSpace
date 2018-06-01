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
        'teacher_id',

        'name',
        'abbreviation',
        'teacher', //if the teacher is not register
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
                'abbreviation',
                'teacher_unique',
                'color',
                'description',
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => [
                'owner_id',
                'teacher_id',
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

    //###################  MANY TO MANY POLYMORPHIC RELATIONSHIPS ##################//

    //attending users
    public function attendingUsers(){
        return $this->morphToMany('App\Models\User', 'attendable');
    }

    //################# ONE TO MANY POLYMORPHIC RELATIONSHIPS #######################//

    //attendances
    public function attendances(){
        return $this->morphMany('App\Models\Attendance', 'attendable');
    }

    //pictures
    public function pictures(){
        return $this->morphMany('App\Models\Picture','picturable');
    }

    //documents
    public function documents(){
        return $this->morphMany('App\Models\Document','documentable');
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
