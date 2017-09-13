<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Customer;
use App\Ordered;

class CustomerController extends Controller
{
    public function cekCustomer()
    {

    }

	public function orderform(Request $id_order)
    {
    	// $orders = Order::where('id_order', $id_order)->first();
        $user_id = \Auth::user()->id_users;
        $customer = Customer::where('user_id', $user_id)->first();
    	// $customer = Customer::where('id_customer', $orders->customer_id)->first();
    	
        return view('customer/order-form', ['customer' => $customer]);
    }

   public function orderisolat(Request $request)
   {
   	$input = $request->all();

    $orders = new Order;
    $error_msg = "";
    $input["typeOrder_id"] = 1;
    if($orders->validate($input)){
    	try {
    		$orders = new Order;

    		$orders->quantity_order = $input["quantity_order"];
    		$orders->date_order = $input["date_order"];
    		$orders->date_expire = $input["date_expire"];
            $orders->customer_id = $input["customer_id"];
            $orders->typeOrder_id = $input["typeOrder_id"];

    		$ordered = new Ordered;
    		$ordered->unitPackage_isolat = $input["unitPackage_isolat"];
    		$ordered->quantity_isolat = $input["quantity_isolat"];
    		$ordered->info_isolat_order = $input["info_isolat_order"];
    		$ordered->save();

    		$orders->save();
    	}
    	catch(\Exception $e){
                   // do task when error
                   $error_msg = $e->getMessage();   // insert query
                }
    }
    else $error_msg = $orders->v->messages()->first();

    $user_id = \Auth::user()->id_users;
    $customer = Customer::where('user_id', $user_id)->first();

    return view('customer/order-form', ['input' => $input, 'error_msg' => $error_msg, 'customer' => $customer]);
   }

   public function analysform(Request $id_order)
    {
    	$orders = Order::where('id_order', $id_order)->first();
    	// $customer = Customer::where('id_customer', $orders->customer_id)->first();
        return view('user/service/base', ['orders' => $orders]);
    }

   public function analysisolat(Request $request)
   {
   	$input = $request->all();

    $orders = new Order;
    $error_msg = "";
    $input["typeOrder_id"] = 2;
    if($orders->validate($input)){
    	try {
    		$orders = new Order;

    		$orders->quantity_order = $input["quantity_orde"];
    		$orders->date_order = $input["date_order"];
    		$orders->date_expire = $input["date_expire"];

    		$ordered = new ordered;
    		$ordered->unitPackage_isolat = $input["unitPackage_isolat"];
    		$ordered->quantity_isolat = $input["quantity_isolat"];
    		$ordered->info_isolat_order = $input["info_isolat_order"];
    		$ordered->save();

    		$orders->save();
    	}
    	catch(\Exception $e){
                   // do task when error
                   $error_msg = $e->getMessage();   // insert query
                }
    }
    else $error_msg = $orders->v->messages()->first();

    return view('customer/service/base', ['input' => $input, 'error_msg' => $error_msg]);
   }
}
