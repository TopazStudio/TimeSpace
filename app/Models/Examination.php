<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id',
        'subject_id',
        'time_table_id',

        'name',
        'type',
        'color',
        'description',
        'note',
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
                'type',
                'color',
                'description',
                'note'
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => [
                'owner_id',
                'subject_id',
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

    //################# RELATIONSHIPS #######################//

    /**
     * Owner who created this examination.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner(){
        return $this->belongsTo('App\Models\User', 'owner_id');
    }

    /**
     * Subject this examination belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject(){
        return $this->belongsTo('App\Models\Clazz','subject_id');
    }

    /**
     * Timetable this examination belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timetable(){
        return $this->belongsTo('App\Models\TimeTable', 'time_table_id');
    }

    /**
     * Users who are signed up to attend this examination. Real attendance, whether going or
     * not, is actually recorded in the attendances table.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function attendingUsers(){
        return $this->morphToMany('App\Models\User', 'attendable','attendances');
    }

    /**
     * Attendances of this examination.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function attendances(){
        return $this->morphMany('App\Models\Attendance', 'attendable');
    }

    /**
     * Where this examination will be located.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function location(){
        return $this->morphOne('App\Models\Location','locatable');
    }

    /**
     * At what time will this examination commence and end.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function time(){
        return $this->morphOne('App\Models\Time','timable');
    }
}
