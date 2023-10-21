<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use Hash;
class UserController extends Controller
{
    public function login(){

        return view ('User/login');

    }

    public function postLogin(Request $req){
        // dd($req->all());
        $checkuser = [
            'email' => $req ->email,
            'password' =>$req ->password,
        ];

        // dd($checkuser);
        if(Auth::attempt($checkuser)){
            return redirect()->route('index')->with('success','Đăng Nhập Thành Công');
        }else{
             return redirect()->back()->with('error','Sai Tài khoản Hoặc Khẩu');
        }
    
    }


    public function register(){

        return view ('User/register');
        
    }

    public function postRegister(Request $req){

        try {
            User::create($req->all());
        } catch (\Throwable $th) {
            dd($th);
        }
        // dd($req->all());
        return redirect()->route('login')->with('success_reg','Đăng Kí Thành Công');
        
    }


    public function logout(){

        Auth::logout();
        
        return redirect()->route('login')->with('logout','Đăng Xuất Thành Công');
        
    }



    public function index_tt(){
        $product_index = DB::table('product_index')->select('*');
        $product_index = $product_index->get();

        $pageName = 'Tên Trang - User';
        
        return view ('User.index', compact('product_index', 'pageName'));
    }

    public function destroy(string $id)
    {
        $product = User::find($id);

        $product->delete();

        return redirect()->route('AdminRegister')->with('delete', 'Xóa Dữ liệu Thành Công.'); 
    }
}
