<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    //
    //protected $primaryKey = 'form_id';
    public $timestamps = false;

    public  function studs() {
        return $this->hasMany('App\Stud');
    }
}
