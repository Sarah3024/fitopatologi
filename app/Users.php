<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'id_users'; // or null
    public $timestamps = false;

     private $rules = array(
        'lengthName' => 'required',
        'instansi_user'  => 'required',
        'email'  => 'required',
        'username'  => 'required',
        'password'  => 'required',
        'instansi_user'  => 'required',
        'id_usertype'  => 'required',
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


    public function role()
    {
        return $this->belongsTo('App\Role', 'id_usertype', 'id_usertype');
    }

    public function isAdmin()
    {
      if($this->id_usertype == 1) return true;
      else return false;
    }

    public function isSpecialUser()
    {
      if($this->id_usertype <= 3) return true;
      else return false;
    }

    public function hasRole($role_name)
    {
        if ($this->isAdmin()) return true;
        if (!$this->role) return false;
        return $this->role->name_usertype == $role_name;
    }
}
