<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Divisi extends Model
{
    protected $table = 'substrat';
    public $timestamps = false;

     private $rules = array(
        'name_divisi' => 'required',
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
