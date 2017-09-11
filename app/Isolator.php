<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Isolator extends Model
{
    protected $table = 'isolator';
    protected $primaryKey = 'id_isolator';
    public $timestamps = false;

     private $rules = array(
        'name_isolator' => 'required',
        'instansi_isolator'  => 'required',
        'expertise_isolator'  => 'required',
        'date_isolator'  => 'required',
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

    public function get_validataion_msg() {
    	return $this->v->messages();
    }
}
