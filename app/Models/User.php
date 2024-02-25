<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'status_admin',
        'nickname',
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'password'
    ];
    protected $hidden = [
      'password',
      'remember_token'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed'
    ];
}


