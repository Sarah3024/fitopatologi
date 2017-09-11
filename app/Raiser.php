<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Raiser extends Model
{
    protected $table = 'raiser';
    protected $primaryKey = 'id_raiser';
    public $timestamps = false;

     private $rules = array(
        'name_raiser' => 'required',
        'instansi_raiser'  => 'required',
        'expertise_raiser'  => 'required',
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
