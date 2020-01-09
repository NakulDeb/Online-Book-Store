<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Session;
use Redirect;
use DB;
session_start();

class UserController extends Controller
{
    public function user(){
        return view('user.user_login');
    }

    public function signup(Request $request){
        $user = array();
            $user['user_first_name'] = $request['user_first_name'];
            $user['user_last_name'] = $request['user_last_name'];
            $user['user_email'] = $request['user_email'];
            $user['user_password'] = md5($request['user_password']);

            DB::table('tbl_users')->insert($user);
            Session::put('message','Signup Sussessfull!!!!');
            return Redirect::to('/');
    }

    public function login(Request $request){
        $tb = new UserModel();
        $tb->user_email = $request['user_email'];
        $tb->user_password = md5($request['user_password']);

        $result = DB::table('tbl_users')
            ->where('user_email',$tb->user_email)
            ->where('user_password',$tb->user_password)
            ->first();

            if($result) {
                Session::put('user_first_name',$result->user_first_name);
                Session::put('user_last_name',$result->user_last_name);
                Session::put('user_id',$result->user_id);
                return Redirect::to('/');
            }
            else{
                Session::put('message','Email or Password Invalid');
                return view('user.user_login');
            }
            //print_r($result);
            exit();
    }

    public function logout(){
        Session::flush();
        return Redirect::to('/');
    }

    
    public function userProfile($user_id){
        $user = DB::table('tbl_users')
                ->where('user_id',$user_id)
                ->first();
        return view('user.user_profile')
                ->with('user',$user);
    }

    public function deleteUser($user_id){
        $this->AdminAuth();
        DB::table('tbl_users')
            ->where('user_id',$user_id)
            ->delete();
            Session::put('message','User Delete Successful!!!');
            return Redirect::to('/admin-deshboard');
    }

     
    public function AdminAuth(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return;
        }
        else{
            return Redirect::to('/go-admin')->send();
        }
    }
}
