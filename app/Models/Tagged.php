<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tagged extends Model
{

    /**
     * Custom table name. Taggeds is to off.
    */
    protected $table = 'tagged';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag_id',

        'taggable_id',
        'taggable_type',
    ];
}
