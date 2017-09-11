<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Species extends Model
{
    protected $table = 'species';
    protected $primaryKey = 'id_species';
    public $timestamps = false;

     private $rules = array(
        'name_species' => 'required',
        'description_species'  => 'required',
        'genus_id'  => 'required',
        'substrat_id'  => 'required',
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
    public function genus()
    {
        return $this->belongsTo('App\Genus', 'genus_id', 'id_genus');
    }

    public function substrat()
    {
        return $this->belongsTo('App\Substrat', 'subsrtat_id', 'id_substrat');
    }

    public function get_validataion_msg() {
    	return $this->v->messages();
    }
}
