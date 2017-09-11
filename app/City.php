<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class City extends Model
{
    protected $table = 'city';
    protected $primaryKey = 'id_city';
    public $timestamps = false;

     private $rules = array(
        'name_city' => 'required',
        'province_id'  => 'required',
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

    public function province()
    {
        return $this->belongsTo('App\Province', 'province_id', 'id_province');
    }

    public function get_validataion_msg() {
    	return $this->v->messages();
    }
}
