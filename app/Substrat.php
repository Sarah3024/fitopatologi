<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Substrat extends Model
{
    protected $table = 'substrat';
    protected $primaryKey = 'id_substrat';
    public $timestamps = false;

     private $rules = array(
        'name_substrat' => 'required',
        'ecology'  => 'required',
        'biology'  => 'required',
        'physiology'  => 'required',
        'mycotoxin'  => 'required',
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
