<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'description',
        'color',
    ];

//RELATIONSHIPS
    //Meetings
    public function meetings()
    {
        return $this->morphedByMany('App\Model\Meeting', 'taggable','tagged');
    }

    //Events
    public function events()
    {
        return $this->morphedByMany('App\Model\Event', 'taggable','tagged');
    }

    //Examinations
    public function examinations()
    {
        return $this->morphedByMany('App\Model\Examination', 'taggable','tagged');
    }

    //Meetings
    public function studies()
    {
        return $this->morphedByMany('App\Model\Study', 'taggable','tagged');
    }

    //Classes
    public function clazzes()
    {
        return $this->morphedByMany('App\Model\Clazz', 'taggable','tagged');
    }
}
