<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Photo extends Model
{
    protected $table = 'photo';
    protected $primaryKey = 'id_photo';
    public $timestamps = false;

//
//      private $rules = array(
//         'biakan_photo' => 'required',
//         'micrograph'  => 'required',
//     );
//
//     public function validate($data)
//     {
//         // make a new validator object
//         $v = Validator::make($data, $this->rules);
//         $result = $v->passes();
//         $this->v = $v;
//         // return the result
//         return $result;
//     }
//
//     public function get_validataion_msg() {
//     	return $this->v->messages();
//     }
}
