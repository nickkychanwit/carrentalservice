<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['name','startDate','expDate','dcType','dc','img','descript'];
    protected $visible = ['name','startDate','expDate','dcType','dc','img','descript'];

    // public function albums()
    // {
    //     return $this->hasMany('App\Album');
    // }
}
