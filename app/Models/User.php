<?php

namespace App\Models;

use App\Util\CRUD\CRUDable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Sleimanx2\Plastic\Searchable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable implements CRUDable
{
    use Notifiable, EntrustUserTrait, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'first_name',
        'second_name',
        'surname',
        'name_prefix',
        'status',
        'email',
        'password',
        'tel',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
                'first_name',
                'second_name',
                'surname',
                'name_prefix',
                'status',
                'email',
                'password',
                'tel',
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => null,

            /**
             * Models authorized to modify this model
             */
            'owner' => [
                'id' => null,
            ]
        ];
    }

    //#################### SEARCHING ###################//

    //TODO: map users of different roles to different types

    public $documentType = 'user';

    public static function index(){
        foreach (static::all() as $model){
            $model->document()->save();
        }
        return true;
    }

    //#################### RELATIONSHIPS ###################//

    public function owned_tags(){
        return $this->hasMany('App\Models\Tag', 'owner_id');
    }

    //Meetings owned by the user
    public function meetingsOwned()
    {
        return $this->hasMany('App\Models\Meeting', 'owner_id');
    }

    //Events owned by the user
    public function eventsOwned()
    {
        return $this->hasMany('App\Models\Event', 'owner_id');
    }

    //Examinations owned by the user
    public function examinationsOwned()
    {
        return $this->hasMany('App\Models\Examination', 'owner_id');
    }

    //Meetings owned by the user
    public function studiesOwned()
    {
        return $this->hasMany('App\Models\Study', 'owner_id');
    }

    //Classes owned by the user
    public function clazzesOwned()
    {
        return $this->hasMany('App\Models\Clazz', 'owner_id');
    }

    //Meetings
    public function attendingMeetings()
    {
        return $this->morphedByMany('App\Models\Meeting', 'attendable','attendances');
    }

    //Events
    public function attendingEvents()
    {
        return $this->morphedByMany('App\Models\Event', 'attendable','attendances');
    }

    //Examinations
    public function attendingExaminations()
    {
        return $this->morphedByMany('App\Models\Examination', 'attendable','attendances');
    }

    //Meetings
    public function attendingStudies()
    {
        return $this->morphedByMany('App\Models\Study', 'attendable','attendances');
    }

    //Classes
    public function attendingClazzes()
    {
        return $this->morphedByMany('App\Models\Clazz', 'attendable','attendances');
    }

    //pictures
    public function pictures(){
        return $this->morphMany('App\Models\Picture','picturable');
    }

    //followers
    public function followers(){
        return $this->belongsToMany('App\Models\User','user_followers','user_id','follower_id');
    }

    //following
    public function following(){
        return $this->belongsToMany('App\Models\User','user_followers','follower_id','user_id');
    }

    //Groups
    public function groups(){
        return $this->belongsToMany('App\Models\Group','group_members','user_id');
    }

    public function group_memberships(){
        return $this->hasMany('App\Models\Group_Member','user_id');
    }
}
