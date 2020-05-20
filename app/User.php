<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    // атрибуты которые можно присвоить
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // скрытые атрибуты для массива
    protected $hidden = [
        'password', 'remember_token',
    ];

    // атрибуты которые должны быть приведены к нативным типам
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
