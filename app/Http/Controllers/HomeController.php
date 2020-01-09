<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;
use Session;
use Illuminate\Database\Query\Builder;
session_start();

class HomeController extends Controller
{
    public function home(){
        $data = DB::table('tbl_product')
                ->join('tbl_category','tbl_product.category_id','=','tbl_category.category_id')
                ->select('tbl_product.*','tbl_category.category_name')
                ->where('tbl_category.publication_status',1)
                ->where('tbl_product.publication_status',1)
                //->inRandomOrder()
                //->limit(3)
                ->paginate(12);

        $manage_product = view('admin.all_product')
                ->with('data',$data);
        return view('home')
                ->with('data',$data);
        //return view('/home');
    }

    
    public function showByCategory($category_id){
        $data = DB::table('tbl_product')
                ->where('category_id',$category_id)
                ->where('publication_status',1)
                ->paginate(12);

        $manage_product = view('admin.all_product')
                ->with('data',$data);
        return view('home')
                ->with('data',$data);
        //return view('/home');
    }

    public function viewDetails($product_id){
            $data = DB::table('tbl_product')
                        ->join('tbl_category','tbl_product.category_id','=','tbl_category.category_id')
                        ->select('tbl_product.*','tbl_category.category_name')
                        ->where('product_id',$product_id)
                        ->first();
            $manage_product = view('admin.all_product')
                        ->with('data',$data);
            return view('product_details')
                        ->with('data',$data);
    }

    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function announcement(){
        return view('announcement');
    }
}
