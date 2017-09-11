<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OperatorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('role:operator');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $isolat_cendawan = DB::table('isolat_cendawan')->get();
        return view('operator/base', compact('isolat_cendawan'));
    }
    public function opedit()
    {
        return view('operator/fungi-edit');
    }

}
