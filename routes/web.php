<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\CarAuditController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProIndexController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Middleware\CheckLogin;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//  Route fe
    
 
    
    Route::get('/', function () {
        return view('User.index_login');
    })->name('index_login');

    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'postLogin']);


    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'postRegister']);

    Route::get('/index', [HomeController::class, 'index'])->name('index');

    Route::get('/index_tt', [userController::class, 'index_tt'])->name('index_tt');
    

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    

    Route::get('/caraudit', [CarAuditController::class, 'create'])->name('caraudit');
    Route::post('/caraudit', [CarAuditController::class, 'store']);



    Route::get('/dangtin', [ProductController::class, 'create'])->name('dangtin');
    Route::post('/dangtin', [ProductController::class, 'store']);

    // Route::get('/dangtin', [ProIndexController::class, 'create'])->name('dangtin');
    // Route::post('/dangtin', [ProIndexController::class, 'store']);


    Route::get('/AllProduct', [AdminController::class, 'allproduct'])->name('AllProduct');

    Route::get('/Tintuc', function () {
        return view('User/TintucNew');
    })->name('tintuc');
    
    Route::get('/toyota', function () {
        return view('User/Toyota');
    })->name('toyota');

    Route::get('/Mercedes', function () {
        return view('User/Mersedes-Benz');
    })->name('Mercedes');

    // chitiet
        Route::get('/User/chitiet/{id}', [ProIndexController::class, 'show'])->name('chitietsanpham');
    // end chitiet

// End Route fe

// Route be
    // Route::get('/AdminPage', [AdminController::class,'adminPage'])->middleware('checklogin::class')->name('adminPage');

    Route::get('/AdminPage', function () {
        return view('Admin/Admin');
    })->middleware('checklogin::class')->name('adminPage');

    Route::get('/loginPage', [HomeController::class,'loginPage'])->name('loginPage');

    Route::get('/AdminRegister', [AdminController::class,'quanlytaikhoan'])->middleware('checklogin::class')->name('AdminRegister');

    Route::get('/AdminDangTin', [ProductController::class,'index'])->middleware('checklogin::class')->name('AdminTin');

    Route::get('/ProIndexController', [ProIndexController::class,'index'])->middleware('checklogin::class')->name('AdminTinIndex');

    Route::get('/ADminCarAudit', [CarAuditController::class,'index'])->middleware('checklogin::class')->name('AdminCar');
// End Route be


// update reg

    Route::get('/Admin/list_reg/edit/{id}', [AdminController::class,'edit'])->name('Edit_User');
    Route::PATCH('/Admin/list_reg/update/{id}', [AdminController::class,'update'])->name('Update_reg');

// end update reg


    
// update car

    Route::get('/Admin/list_car/edit/{id}', [CarAuditController::class,'edit'])->name('Edit_car');
    Route::PATCH('/Admin/list_car/update/{id}', [CarAuditController::class,'update'])->name('Update_car');

// end update car


// update product

    Route::get('/Admin/list_dangtin/edit/{id}', [ProductController::class,'edit'])->name('Edit_product');
    Route::PATCH('/Admin/list_dangtin/update/{id}', [ProductController::class,'update'])->name('Update_product');

// end update product


// update product index

    Route::get('/Admin/list_dangtin_index/edit/{id}', [ProIndexController::class,'edit'])->name('Edit_product_index');
    Route::PATCH('/Admin/list_dangtin_index/update/{id}', [ProIndexController::class,'update'])->name('Update_product_index');

// end update product index


// delete dangtin

    Route::DELETE('/Admin/List_dangtin/delete/{id}', [ProductController::class, 'destroy'])->name('Delete_dangtin');

//end delete dangtin

// delete dangtin index

    Route::DELETE('/Admin/List_dangtin_index/delete/{id}', [ProIndexController::class, 'destroy'])->name('Delete_dangtin_index');

//end delete dangtin index

// delete caraudit

    Route::DELETE('/Admin/Car_audit/delete/{id}', [CarAuditController::class, 'destroy'])->name('Delete_dangtin_index');

//end delete caraudit

// delete register

    Route::DELETE('/Admin/Reg/delete/{id}', [userController::class, 'destroy'])->name('Delete_dangtin_index');

//end delete register


// search index
    Route::get('/search', [AdminController::class,'search_index'])->name('search_index');
// end search index