<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class State extends Model
{
    protected $table = 'state';
    protected $primaryKey = 'id_state';
    public $timestamps = false;

     private $rules = array(
        'name_state' => 'required',
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
