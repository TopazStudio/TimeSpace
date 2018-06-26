<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 23/06/18
 * Time: 12:03 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Group_Member extends Model
{
    protected $table = "group_members";

    protected $fillable = [
        'group_id',
        'user_id',
        'join_status'
    ];
}