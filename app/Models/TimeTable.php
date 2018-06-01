<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class  TimeTable extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id',
        'group_id',

        'name',
        'type',
        'status',
        'priority'
    ];

    //#################### RELATIONSHIPS ###################//

    public static function crudSettings()
    {
        return[
            /**
             * Attributes that will be persisted to and from the
             * database
             */
            'attributes' => [
                'name',
                'type',
                'status',
                'priority'
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => [
                'owner_id',
                'group_id',
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

    public function owner(){
        return $this->belongsTo('App\Models\User','owner_id');
    }

    public function group(){
        return $this->belongsTo('App\Models\User','group_id');
    }

    public function clazzes(){
        return $this->hasMany('App\Models\Clazz','time_table_id');
    }

    public function events(){
        return $this->hasMany('App\Models\Event','time_table_id');
    }

    public function meetings(){
        return $this->hasMany('App\Models\Meeting','time_table_id');
    }

    public function studies(){
        return $this->hasMany('App\Models\Study','time_table_id');
    }

    public function examinations(){
        return $this->hasMany('App\Models\Examination','time_table_id');
    }

    public function workouts(){
        return $this->hasMany('App\Models\Workout','time_table_id');
    }

    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable','tagged');
    }
}
