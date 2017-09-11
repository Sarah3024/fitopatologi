<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Genus extends Model
{
    protected $table = 'genus';
    protected $primaryKey = 'id_genus';
    public $timestamps = false;

     private $rules = array(
        'name_genus' => 'required',
        'family_id'  => 'required',
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

    public function family()
    {
        return $this->belongsTo('App\Family', 'family_id', 'id_family');
    }

    public function get_validataion_msg() {
    	return $this->v->messages();
    }
}
