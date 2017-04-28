<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name'];

    public function singer()
    {
        return $this->belongsTo('App\Singer');
    }

    public function songs()
    {
        return $this->hasMany('App\Song');
    }
}
