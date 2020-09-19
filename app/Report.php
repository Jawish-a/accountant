<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'name', 'uuid', 'extension', 'url', 'user_id', 'company_id'
    ];
    //
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
