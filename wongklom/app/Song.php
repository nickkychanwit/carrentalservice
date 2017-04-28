<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['name', 'lyric'];

    public function album()
    {
        return $this->belongsTo('App\Album');
    }
}
