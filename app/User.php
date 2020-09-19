<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'role_id', 'company_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function files()
    {
        return $this->hasMany('App\Files');
    }
    public function chats()
    {
        return $this->hasMany('App\Chat');
    }
    /*
        returns the list of the companies for the accountant
    */
    public function companies()
    {
        return $this->hasMany('App\Company', 'accountant_id');
    }
}
