<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id_order';
    public $timestamps = false;
    protected $dateFormat = 'dd MMM YYYY';

     private $rules = array(
        'quantity_order' => 'required',
        'date_order'  => 'required',
        'date_expire'  => 'required',
        'customer_id' => 'required',
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
    public function ordered()
    {
        return $this->belongsTo('App\Ordered', 'isolatOrder_id', 'id_isolatOrder');
    }
    public function typeOrder()
    {
        return $this->belongsTo('App\TypeOrder', 'typeOrder_id', 'id_typeOrder');
    }
    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id', 'id_customer');
    }
    public function species()
    {
        return $this->belongsTo('App\Species', 'species_id', 'id_species');
    }

    public function get_validataion_msg()
    {
    	return $this->v->messages();
    }
}
