<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ball extends Model
{
    //
    //protected $primaryKey = 'Ball_id';
    public $timestamps = false;

    protected $fillable = [
      'stud_id',
      'predmet_id',
      'semester',
      'ball'
    ];

    public  function predmet() {
        return $this->belongsTo('App\Predmet');
    }
    public  function stud() {
        return $this->belongsTo('App\Stud');
    }

}
