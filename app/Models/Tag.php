<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sleimanx2\Plastic\Searchable;

class Tag extends Model
{
    use Searchable;

    protected $fillable = [
        'owner_id',

        'name',
        'description',
        'color',
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
                'description',
                'color',
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => [
                'owner_id'
            ],

            /**
             * Models authorized to modify this model
             */
            'owner' => [
                'owner_id' => null
            ]
        ];
    }

    //#################### SEARCHING ###################//

    public $documentType = 'tag';

    public static function index(){
        foreach (static::all() as $model){
            $model->document()->save();
        }
        return true;
    }

    //#################### RELATIONSHIP ###################//

//RELATIONSHIPS
    //Tags
    public function owner()
    {
        return $this->belongsTo('App\Models\User', 'owner_id');
    }

    //Meetings
    public function meetings()
    {
        return $this->morphedByMany('App\Models\Meeting', 'taggable','tagged');
    }

    //Events
    public function events()
    {
        return $this->morphedByMany('App\Models\Event', 'taggable','tagged');
    }

    //Examinations
    public function examinations()
    {
        return $this->morphedByMany('App\Models\Examination', 'taggable','tagged');
    }

    //Meetings
    public function studies()
    {
        return $this->morphedByMany('App\Models\Study', 'taggable','tagged');
    }

    //Classes
    public function clazzes()
    {
        return $this->morphedByMany('App\Models\Clazz', 'taggable','tagged');
    }
}
