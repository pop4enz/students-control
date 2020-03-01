<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    //
    //protected $primaryKey = 'spec_id';

    public $timestamps = false;

    protected $fillable = [
        'specname',
        'specdesc',
        'fak_id',
        'spectext'
    ];

    public  function groups() {
        return $this->hasMany('App\Group');
    }
    public function fak()
    {
        return $this->belongsTo('App\Fak');
    }
}
