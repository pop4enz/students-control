<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fak extends Model
{
    //
    //protected $primaryKey = 'Fak_id';
    public $timestamps = false;

    public  function specs() {
        return $this->hasMany('App\Spec');
    }
}
