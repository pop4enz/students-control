<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class stud extends Model
{
//   protected $primaryKey = 'stud_id';
    use SearchableTrait;
    public $timestamps = false;

    protected $fillable = [
        'f_name',
        'l_name',
        'group_id',
        'form_id'
    ];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'studs.f_name' => 10,
            'studs.l_name' => 10,
            'groups.grname' => 7,
            'specs.specname' => 5,
            'faks.nfak' => 3,
        ],
        'joins' => [
            'groups' => ['studs.group_id','groups.id'],
            'specs' => ['groups.spec_id','specs.id'],
            'faks' => ['specs.fak_id','faks.id'],
        ],
    ];

    public  function group() {
        return $this->belongsTo('App\Group');
    }
    public  function form() {
        return $this->belongsTo('App\Form');
    }

    public function getFullNameAttribute(){
        return $this->f_name . ' ' . $this->l_name;
    }
}
