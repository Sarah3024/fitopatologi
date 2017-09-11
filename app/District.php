<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class District extends Model
{
    protected $table = 'district';
    protected $primaryKey = 'id_district';
    public $timestamps = false;

     private $rules = array(
        'name_district' => 'required',
        'id_city'  => 'required',
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

    public function city()
    {
        return $this->belongsTo('App\City', 'id_city', 'id_city');
    }

    public function get_validataion_msg() {
    	return $this->v->messages();
    }
}
