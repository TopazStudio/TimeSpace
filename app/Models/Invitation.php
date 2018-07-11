<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = [
        'inviter_id',
        'inviteCode',
        'invitee_name',
        'invitee_email',
        'invitee_tel',
    ];
}
