<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['name','startDate','endDate','dcType','dc','img','descript'];
    protected $visible = ['name','startDate','endDate','dcType','dc','img','descript'];

    // public function albums()
    // {
    //     return $this->hasMany('App\Album');
    // }
}
