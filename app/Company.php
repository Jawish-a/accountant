<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name', 'uuid', 'accountant_id'
    ];
    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function files()
    {
        return $this->hasMany('App\File');
    }
    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function accountant()
    {
        return $this->belongsTo('App\User');
    }
}
