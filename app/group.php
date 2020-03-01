<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    //
//    protected $primaryKey = 'Group_id';

    public $timestamps = false;

    protected $fillable = [
        'grname',
        'spec_id'
    ];


    public function studs()
    {
        return $this->hasMany('App\Stud');
    }
    public function spec()
    {
        return $this->belongsTo('App\Spec');
    }
}
