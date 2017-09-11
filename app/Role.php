<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Role extends Model
{
    protected $table = 'user_type';
    protected $primaryKey = 'id_usertype';

    protected $fillable = ['name_usertype'];

//      private $rules = array(
//         'name_usertype'  => 'required',
//         // .. more rules here ..
//     );

//     public function validate($data)
//     {
//         // make a new validator object
//         $v = Validator::make($data, $this->rules);
//         $result = $v->passes();
//         $this->v = $v;
//         // return the result
//         return $result;
//     }

//     public function get_validataion_msg() {
//     	return $this->v->messages();
//     }
    public function users()
	{
	  return $this
	    ->belongsToMany(‘App\User’)
	    ->withTimestamps();
	}
	}
