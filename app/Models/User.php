<?php

namespace App\Models;

use App\Util\CRUD\CRUDable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements CRUDable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
        'full_name',
        'status',
        'email',
        'password',
        'tel',
        'identification_no',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //CRUD
    public static function crudSettings()
    {
        return[
            /**
             * Whether the model has a picture.
             */
            'hasPicture'=>true,

            /**
             * Attributes that will be persisted to and from the
             * database
             */
            'attributes' => [
                'role',
                'full_name',
                'status',
                'email',
                'password',
                'tel',
                'identification_no',
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => [],

            /**
             * Models authorized to modify this model
             */
            'owner' => [
                'id' => null,
            ]
        ];
    }


}
