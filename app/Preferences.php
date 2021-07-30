<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preferences extends Model
{
    protected $fillable = ['user_id','ph','high_range_ph','ammonia','nitrite','nitrate'];
    //
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
