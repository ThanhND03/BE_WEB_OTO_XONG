<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        // return view ('User/index');

        
        $product_index = DB::table('product_index')->select('*');
        $product_index = $product_index->get();

        $pageName = 'Tên Trang - User';

        // return view ('User.index', compact('product_index', 'pageName'));


        if(Auth::id()){

            $role = Auth()->user()->role;

            if($role == 'User')
            {
                return view('User.index',compact('product_index', 'pageName'));
            }
            else if($role == 'Admin')
            {
                return view('Admin.Admin', );
            }
            else
            {
                return redirect()->back();
            }
        }

    }

    public function loginPage(){

        $product_index = DB::table('product_index')->select('*');
        $product_index = $product_index->get();

        $pageName = 'Tên Trang - User';

        return view ('User.index', compact('product_index', 'pageName'));
        // return view ('User/index');

    }

}
