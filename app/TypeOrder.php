<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class TypeOrder extends Model
{
    protected $table = 'type_order';
    protected $primaryKey = 'id_typeOrder';
    public $timestamps = false;

     private $rules = array(
        'name_typeOrder' => 'required',
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
