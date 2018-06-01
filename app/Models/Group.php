<?php

namespace App\Models;

use App\Util\CRUD\CRUDable;
use Illuminate\Database\Eloquent\Model;

class Group extends Model implements CRUDable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'owner_id',
        'organization_id',

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
                'organization_id',
            ],

            /**
             * Models authorized to modify this model
             */
            'owner' => [
                'owner_id' => null,
            ]
        ];
    }

    //owner
    public function owner(){
        return $this->belongsTo('App\Models\User','owner_id');
    }

    //groups
    public function organization(){
        return $this->belongsTo('App\Models\Organization','organization_id');
    }

    //groups
    public function group_members(){
        return $this->belongsToMany('App\Models\User','group_members','group_id');
    }
}
