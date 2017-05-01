<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Auth\User as MongodbUser;

class User extends MongodbUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mobile', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
