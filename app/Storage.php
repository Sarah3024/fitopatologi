<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Storage extends Model
{
    protected $table = 'storage';
    protected $primarykey = 'id_storage';
    public $timestamps = false;

     private $rules = array(
        'no_tube' => 'required',
        'rack'  => 'required',
        'isolator_id'  => 'required',
        'raiser_id'  => 'required',
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

    public function isolator()
    {
        return $this->belongsTo('App\Isolator', 'isolator_id', 'id_isolator');
    }
    public function raiser()
    {
        return $this->belongsTo('App\Raiser', 'raiser_id', 'id_raiser');
    }

    public function get_validataion_msg() {
    	return $this->v->messages();
    }
}
