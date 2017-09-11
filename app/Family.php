<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Family extends Model
{
    protected $table = 'family';
    protected $primaryKey = 'id_family';
    public $timestamps = false;

     private $rules = array(
        'name_family' => 'required',
        'ordo_id'  => 'required',
        // .. more rules here ..
    );

    public function validate($data)
    {
        // make a new validator object
        $v = Validator::make($data, $this->rules);
        $result = $v->passes();
        $this->v = $v;
        // return the result
        return $result;
    }
    public function ordo()
    {
        return $this->belongsTo('App\Ordo', 'ordo_id', 'id_ordo');
    }
    public function get_validataion_msg() {
    	return $this->v->messages();
    }
}
