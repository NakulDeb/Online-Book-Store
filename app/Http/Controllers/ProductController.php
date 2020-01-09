<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Redirect;
use DB;
use Session;
session_start();

class ProductController extends Controller
{
    public function addProduct(){
        $this->AdminAuth();
        return view('admin.add_product');
    }

    public function saveProduct(Request $request){
        $this->AdminAuth();
        $product = array(); 
        $product['category_id'] = $request['category_id'];
        $product['product_name'] = $request['product_name'];
        $product['writer_name'] = $request['writer_name'];
        $product['product_price'] = $request['product_price'];
        $product['product_description'] = $request['product_description'];
        $product['publication_status'] = $request['publication_status'];
        $image = $request->file('product_image');

        if($image){
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path ='images/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $product['product_image'] = $image_url;
                
                DB::table('tbl_product')->insert($product);
                Session::put('message','Product added Sussessfully!!!!');
                return Redirect::to('/add-product');
            }
        }
        $product['product_image']='';
        DB::table('tbl_product')->insert($product);
        Session::put('message','Product added Sussessfully without image...');
        return Redirect::to('/add-product');
    }

    public function allProduct(){
        $this->AdminAuth();
        $data = DB::table('tbl_product')
                ->join('tbl_category','tbl_product.category_id','=','tbl_category.category_id')
                ->select('tbl_product.*','tbl_category.category_name')
                ->paginate(5);
        $manage_category = view('admin.all_product')
                ->with('data',$data);
        return view('admin.all_product')
                ->with('data',$data);
        //return view('admin.all_category');
    }


    public function deactiveProduct($product_id){
        DB::table('tbl_product')
            ->where('product_id',$product_id)
            ->update(['publication_status'=>0]);
            Session::put('message','Product Deactive Successfully!!!');
            return Redirect::to('/all-product');
    }

    public function activeProduct($product_id){
        DB::table('tbl_product')
            ->where('product_id',$product_id)
            ->update(['publication_status'=>1]);
            Session::put('message','Product Active Successfully!!!');
            return Redirect::to('/all-product');
    }


    public function editProduct($product_id){
        $this->AdminAuth();
        $data = DB::table('tbl_product')
            ->where('product_id',$product_id)
            ->first();

        return  view('admin.edit_product')
            ->with('data',$data);
        //return view('admin.edit_product',$data);
    }


    public function updateProduct(Request $request, $product_id){
        $this->AdminAuth();
        $product = array();
            $product['product_name'] = $request->product_name;
            $product['writer_name'] = $request->writer_name;
            $product['product_price'] = $request->product_price;
            $product['product_name'] = $request->product_name;
            $product['product_description'] = $request->category_description;
            $product['publication_status'] = $request->publication_status;

            DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update($category);
            Session::put('message','Category Update Sussessfully!!!!');
            return Redirect::to('/all-category');
    }



    public function deleteProduct($product_id){
        $this->AdminAuth();
        DB::table('tbl_product')
            ->where('product_id',$product_id)
            ->delete();
            Session::put('message','Product Delete Successful!!!');
            return Redirect::to('/all-product');
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
