<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'display_name',
        'description'
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
                'display_name',
                'description'
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => null,

            /**
             * Models authorized to modify this model
             */
            'owner' => [
                'id',
            ],
        ];
    }
}
