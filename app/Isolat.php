<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Isolat extends Model
{
    protected $table = 'isolat_cendawan';
    protected $primaryKey = 'id_cendawan';
    public $timestamps = false;

     private $rules = array(
        'code_cendawan' => 'required',
        'name_cendawan'  => 'required',
        // 'comment' => 'required',
        'quantity_cendawan'  => 'required',
        'label_cendawan' => 'required',
        // 'utilization'  => 'required',
        // 'comment_cendawan'  => 'required',
    //     'location_id'  => 'required',
    //     'species_id'  => 'required',
    //     'photo_id' => 'required',
    //     'storage_id'  => 'required',
    //     'updating_id'  => 'required',
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
