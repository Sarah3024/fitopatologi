<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Users;

use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
      use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function credentials(Request $request)
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
            'verified' => 1,
        ];
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication passed...
            // if (Auth::user()->isAdmin()) return redirect()->intended('admin');
            if (Auth::user()->typeuser_id <= 3) return redirect()->intended('admin');
            // return redirect()->intended('');
        }
        // show the form
        return view('auth/login', ['input' => $request, 'error_msg' => "Username or password is invalid"]);
    }

    public function register(Request $request)
    {
        $input = $request->all();

        $users = new Users;
        $error_msg = "";
        $input["id_usertype"] = 4;
        if($users->validate($input)) {


          if ($request->password === $request->password2) {
              try {
                  $users = new Users;

                  $users->lengthName = $input["lengthName"];
                  $users->instansi_user = $input["instansi_user"];
                  $users->email = $input["email"];
                  $users->username = $input["username"];
                  $users->password = Hash::make($input["password"]);
                  $users->id_usertype = $input["id_usertype"];
                  $users->save();
                  return $this->login($request);
              }
              catch(\Exception $e){
                 // do task when error
                 $error_msg = "Username or email is already exist";   // insert query
              }

          }
          else $error_msg = "Password and repeat password does not match";
        }
        else $error_msg = $users->v->messages()->first();

        // show the form
        return view('auth/register', ['input' => $request, 'error_msg' => $error_msg]);
    }

    public function showLoginForm()
    {
        // show the form
        return view('auth/login');
    }

    public function showRegister()
    {
        // show the form
        return view('auth/register');
    }
}
