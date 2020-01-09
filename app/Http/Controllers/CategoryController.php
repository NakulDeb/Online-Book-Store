<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;
use App\Category;
use Session;
session_start();

class CategoryController extends Controller
{
    public function allCategory(){
        $this->AdminAuth();

        $data = DB::table('tbl_category')->paginate(5);
        $manage_category = view('admin.all_category')
                ->with('data',$data);
        return view('admin.all_category')
                ->with('data',$data);
        //return view('admin.all_category');
    }

    public function addCategory(){
        $this->AdminAuth();

        return view('admin.add_category');
    }

    public function saveCategory(Request $request){
        $this->AdminAuth();

        $category = array();
            //$category['category_id']= 5;
            $category['category_name'] = $request['category_name'];
            $category['category_description'] = $request['category_description'];
            $category['publication_status'] = $request['publication_status'];

            DB::table('tbl_category')->insert($category);
            Session::put('message','Category added Sussessfully!!!!');
            return Redirect::to('/add-category');
    }

    public function unactive($category_id){
        DB::table('tbl_category')
            ->where('category_id',$category_id)
            ->update(['publication_status'=>0]);
            Session::put('message','Category Unactive Successfully!!!');
            return Redirect::to('/all-category');
    }

    public function active($category_id){
        DB::table('tbl_category')
            ->where('category_id',$category_id)
            ->update(['publication_status'=>1]);
            Session::put('message','Category Active Successfully!!!');
            return Redirect::to('/all-category');
    }


    public function editCategory($category_id){
        $this->AdminAuth();
        $data = DB::table('tbl_category')
            ->where('category_id',$category_id)
            ->first();

        return  view('admin.edit_category')
            ->with('data',$data);
        //return view('admin.edit_category',$data);
    }


    public function updateCategory(Request $request, $category_id){
        $this->AdminAuth();
        $category = array();
            $category['category_name'] = $request->category_name;
            $category['category_description'] = $request->category_description;
            $category['publication_status'] = $request->publication_status;

            DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update($category);
            Session::put('message','Category Update Sussessfully!!!!');
            return Redirect::to('/all-category');
    }



    public function deleteCategory($category_id){
        $this->AdminAuth();
        DB::table('tbl_category')
            ->where('category_id',$category_id)
            ->delete();
            Session::put('message','Category Delete Successful!!!');
            return Redirect::to('/all-category');
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
