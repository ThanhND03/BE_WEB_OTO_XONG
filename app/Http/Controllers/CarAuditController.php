<?php

namespace App\Http\Controllers;

use App\Models\ni_car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarAuditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car = DB::table('ni_car')->select('*');
        $car = $car->paginate(5);

         // search
         if($search = request()->txtsearch){
            $car = DB::table("ni_car")->where("name", "like", "%$search%")->paginate(5);
        }   
        // end search

        $pageName = 'Tên Trang - User';

        return view ('Admin/List Car_audit', compact('car', 'pageName'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('User/Car_audit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ni_car = new ni_car;
        $ni_car->name = $request->username;
        $ni_car->phone = $request->SDT;
        $ni_car->khuvuc = $request->khuvuc;
        $ni_car->tenxe = $request->tenxe;
        $ni_car->date = $request->date;
        $ni_car->note = $request->note;

        $ni_car->save();
        // return redirect()->action('CarAuditController@create');
        return redirect()->route('caraudit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = ni_car::findOrFail($id);
        $pageName = 'car - Update';
        return view('/Admin/update_car', compact('car', 'pageName'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = ni_car::find($id);
        $car->name = $request->username;
        $car->phone = $request->SDT;
        $car->tenxe = $request->tenxe;
        $car->date = $request->date;
        $car->note = $request->note;

        // dd($car);
        $car->save();
        return redirect()->route('AdminCar')->with('edit', 'Sửa Dữ liệu Thành Công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = ni_car::find($id);

        $product->delete();

        return redirect()->route('AdminCar')->with('delete', 'Xóa Dữ liệu Thành Công.'); 
    }
}
