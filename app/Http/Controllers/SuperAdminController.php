<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
session_start();

class SuperAdminController extends Controller
{

    public function admin(){
        $this->AdminAuth();
        return view('admin_layout');
    }

    public function logout(){
        Session::flush();
        return Redirect::to('/go-admin');
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
