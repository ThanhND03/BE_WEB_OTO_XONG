<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckLogin;
use App\Models\ni_car;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  
    
   

    public function quanlytaikhoan(){

        // dd(request()->txtsearch);

        $user = DB::table('users')->select('*');
        // $user = $user->get();
        $user = $user->paginate(5);
        // search
        if($search = request()->txtsearch){
            $user = DB::table("users")->where("name", "like", "%$search%")->paginate(5);
        }   
        // end search
        $pageName = 'Tên Trang - User';
        

        return view('Admin/List_register', compact('user', 'pageName'));

        
        
    }

    public function allproduct(){
        $product = DB::table('product')->select('*');
        $product = $product->get();
       
        // search
            if($search = request()->txtsearch){
                $product = DB::table("product")->where("hangsx", "like", "%$search%")->get();
            }
        // end search
        $pageName = 'Tên Trang - User';

        return view ('User/all_product', compact('product', 'pageName'));
    }


    // update regiter

    public function edit($id){
        $user = user::findOrFail($id);
        $pageName = 'user - Update';
        return view('/Admin/update_reg', compact('user', 'pageName'));
    }


    public function update(Request $request, $id){
        $user = user::find($id);
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        return redirect()->route('AdminRegister')->with('edit', 'Sửa Dữ liệu Thành Công.');
    }


    // end update regiter

    public function search_index()
    {
        $product_index = DB::table('product_index')->select('*');
        $product_index = $product_index->paginate(5);
        // search
        if($search = request()->txtsearch){
            $product_index = DB::table("product_index")->where("hangsx", "like", "%$search%")->paginate(5);
        }   
        // end search
        $pageName = 'Tên Trang - User';

        return view ('User/search', compact('product_index', 'pageName'));
    }
   

    
    // public function search_all_product()
    // {
    //     $product_index = DB::table('product_index')->select('*');
    //     $product_index = $product_index->paginate(5);
    //     // search
    //     if($search = request()->txtsearch){
    //         $product_index = DB::table("product_index")->where("hangsx", "like", "%$search%")->paginate(5);
    //     }   
    //     // end search
    //     $pageName = 'Tên Trang - User';

    //     return view ('User/search', compact('product_index', 'pageName'));
    // }

}
