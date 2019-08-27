<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'user_id',
        'social_network',
        'social_id',
        'social_email',
        'social_avatar'
    ];
}
