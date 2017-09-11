<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Fungi extends Model
{
    protected $table = 'isolat_cendawan';
    public $timestamps = false;

     private $rules = array(
        'code_cendawan' => 'required',
        'name_cendawan'  => 'required',
        'quantity_cendawan'  => 'required',
        'label_cendawan'  => 'required',
        'utilization'  => 'required',
        'user_id'  => 'required',
        'location_id'  => 'required',
        'species_id'  => 'required',
        'photo_id'  => 'required',
        'storage_id'  => 'required',
        'updating_id'  => 'required',
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
