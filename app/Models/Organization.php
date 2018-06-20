<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sleimanx2\Plastic\Searchable;

class Organization extends Model
{
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'owner_id',

        'name',
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
                'description',
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => [
                'owner_id',
            ],

            /**
             * Models authorized to modify this model
             */
            'owner' => [
                'owner_id' => null,
            ]
        ];
    }

    //#################### SEARCHING ###################//

    public $documentType = 'organization';

    public static function index(){
        foreach (static::all() as $model){
            $model->document()->save();
        }
        return true;
    }

    //#################### RELATIONSHIPS ###################//


    //owner
    public function owner(){
        return $this->belongsTo('App\Models\User','owner_id');
    }

    //groups
    public function groups(){
        return $this->hasMany('App\Models\Group','organization_id');
    }

    //pictures
    public function pictures(){
        return $this->morphMany('App\Models\Picture','picturable');
    }

}
