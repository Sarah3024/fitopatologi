<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Ordered extends Model
{
    protected $table = 'isolat_order';
    protected $primaryKey = 'id_isolatOrder';
    public $timestamps = false;

     private $rules = array(
        'unitPackage_isolat' => 'required',
        'quantity_isolat'  => 'required',
        'info_isolat_order'  => 'required',
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
