<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Users;
use App\Role;
use App\Order;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('role:admin,operator,verificator');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {

        $fungi_list= DB::table('isolat_cendawan')->orderBy('name_cendawan')->get();
        $users= DB::table('users')->orderBy('lengthName')->get();
        $customer= DB::table('customer')->orderBy('name_customer')->get();
        $unverified= DB::table('isolat_cendawan')->where('status_verifiedData', 0)->get();
        return view('admin/dashboard',  ['fungi_list' => $fungi_list, 'users' => $users, 'customer' => $customer, 'unverified' => $unverified]);
    }



     public function adduser(Request $request)
    {
        $input = $request->all();

        $users = new Users;
        $error_msg = "";
        if(isset($input["id_users"]))  $input["password"] = "password";
        if($users->validate($input)) {

            $input["passwordHash"] = Hash::make($input["password"]);

            try {
                if(isset($input["id_users"])){
                    $users = Users::where('id_users', $input['id_users'])->first();
                    $input["passwordHash"] = $users->password;
                }
                else{
                    $users = new Users;
                }
                $users->lengthName = $input["lengthName"];
                $users->instansi_user = $input["instansi_user"];
                $users->email = $input["email"];
                $users->username = $input["username"];
                $users->password = $input["passwordHash"];
                $users->id_usertype = $input["id_usertype"];
                $users->save();
                // $users->id_users;
                $input = [];
            }
            catch(\Exception $e){
               // do task when error
               $error_msg = "Username or email is already exist";   // insert query
            }
        }
        else $error_msg = $users->v->messages()->first();
        $users_data= DB::table('users')->orderBy('lengthName')->get();


        return view('admin/user-mng',['input' => $input, 'error_msg' => $error_msg, 'users_data' => $users_data]);
    }

    public function indexuser()
    {

        $users_data= DB::table('users')->orderBy('lengthName')->get();
        return view('admin/user-mng',  ['users_data' => $users_data, 'error_msg' => '']);
    }
    public function userrole()
    {
        $roles= DB::table('user_type')->get();

        // $roles = new Role;
        // return response()->json($roles);
        return view('admin/user-mng', ['roles' => $roles]);
    }

    public function destroy($id_users)
    {
        DB::table('users')->where('id_users', $id_users)->delete();
        // $users_data = Users::find($id_users);
        // if($users_data == null || count($users_data) == 0)
        // {
        //     return redirect()->intended('admin/user-mng');
        // }
        // $users_data->delete();

        // return redirect()->intended('admin/user-mng')->with(['message' => 'Successfuly deleted!']);
        return redirect('admin-user-mng')->with(['message' => 'Successfuly deleted!']);
    }

    public function indexorder()
    {
        $order = Order::all();

        return view('admin/order-mng', ['order' => $order]);
    }
    public function indexinvoice()
    {
        return view('admin/detail-order');
    }

    public function ViewDetail(Request $request)
    {
        $id_order = $request->id;

        $order = Order::find($id_order);

        return view('admin/order-mng-view', ['order' => $order]);
    }
}
