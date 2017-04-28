<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable = ['name'];
    protected $visible = ['name', 'id'];

    public function albums()
    {
        return $this->hasMany('App\Album');
    }
}
