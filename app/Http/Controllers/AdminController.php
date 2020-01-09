<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Tbl;
use Session;
use Redirect;
session_start();

class AdminController extends Controller
{
    public function admin(){
        return view('admin_login');
    }

    public function login(Request $request){
        $tb = new Tbl();
        $tb->admin_email = $request['admin_email'];
        $tb->admin_password = md5($request['admin_password']);

        $result = DB::table('tbl_admin')
            ->where('admin_email',$tb->admin_email)
            ->where('admin_password',$tb->admin_password)
            ->first();

            if($result) {
                Session::put('admin_name',$result->admin_name);
                Session::put('admin_id',$result->admin_id);
                return Redirect::to('/admin-deshboard');
            }
            else{
                Session::put('message','Email or Password Invalid');
                return Redirect::to('/go-admin');
            }
            //print_r($result);
            exit();
    }
}
