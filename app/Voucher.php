<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['name','description','startDate','endDate','discount','pointCosume'];
    protected $visible = ['name','description','startDate','endDate','discount','pointCosume'];

    // public function albums()
    // {
    //     return $this->hasMany('App\Album');
    // }
}
