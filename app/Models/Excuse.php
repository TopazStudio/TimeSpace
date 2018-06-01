<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Excuse extends Model implements CRUDable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'confirmation',

        'attendable_id',
        'attendable_type',
    ];

    //CRUD
    public static function crudSettings()
    {
        return[
            /**
             * Attributes that will be persisted to and from the
             * database
             */
            'attributes' => [
                'reason',
            ],

            /**
             * Foreign Keys in the model.
             */
            'foreign_keys' => [],

            /**
             * Models authorized to modify this model
             */
            'owner' => [
                'user_id' => null,
            ]
        ];
    }
}
