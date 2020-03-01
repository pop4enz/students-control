<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class predmet extends Model
{
    //
   // protected $primaryKey = 'Pred_id';
    public $timestamps = false;

    protected $fillable = [
        'predname',
        'fname'
    ];

    public  function balls() {
        return $this->hasMany('App\Ball');
    }
}
