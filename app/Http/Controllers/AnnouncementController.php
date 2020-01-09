<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;
use App\Category;
use Session;
session_start();

class AnnouncementController extends Controller
{
    public function allAnnouncement(){
        $this->AdminAuth();

        $announcement = DB::table('tbl_announcement')->get();
        $manage_category = view('admin.all_announcement')
                ->with('data',$data);
        return view('admin.all_announcement')
                ->with('announcement',$announcement);
        //return view('admin.all_category');
    }

    public function addAnnouncement(){
        $this->AdminAuth();

        return view('admin.add_announcement');
    }

    public function saveAnnouncement(Request $request){
        $this->AdminAuth();

        $announcement = array();
            //$category['category_id']= 5;
            $announcement['announcement_title'] = $request['announcement_title'];
            $announcement['announcement_details'] = $request['announcement_details'];
            $announcement['announcement_hyperlink'] = $request['announcement_hyperlink'];
            $announcement['publication_status'] = $request['publication_status'];

            DB::table('tbl_announcements')->insert($announcement);
            Session::put('message','Announcement added Sussessfully!!!!');
            return Redirect::to('/add-announcement');
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
