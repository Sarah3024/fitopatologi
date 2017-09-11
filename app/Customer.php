<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer'; // or null
    public $timestamps = false;

     private $rules = array(
        'name_customer' => 'required',
        'address_customer'  => 'required',
        'tlp_customer'  => 'required',
        'fax_customer'  => 'required',
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

    public function user()
    {
        return $this->belongsTo('App\Users', 'user_id', 'id_users');
    }


    public function get_validataion_msg() {
    	return $this->v->messages();
    }

}
