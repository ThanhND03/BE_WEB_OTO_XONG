<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $product = product::paginate(3);
        // return view ('Admin/List_dangtin', compact('product'))->with('i', (request()->input('page',1) -1 ) *3 );

        $product = DB::table('product')->select('*');
        $product = $product->paginate(4);
       
        // search
            if($search = request()->txtsearch){
                $product = DB::table("product")->where("hangsx", "like", "%$search%")->paginate(4);
            }
        // end search
        $pageName = 'Tên Trang - User';

        return view ('Admin/List_dangtin', compact('product', 'pageName'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('User/dangtin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->has('hinhanh')){
            $file = $request->hinhanh;
            $ext = $request->hinhanh->extension();
            $file_name = time().'-'.'product.'.$ext;
            // dd($file_name);
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['images' => $file_name]);

    //    dd($request->all());

        $product = new product;
        $product->khuvuc = $request->khuvuc;
        $product->tinhtrang = $request->tinhtrang;
        $product->txtpicture = $file_name;
        $product->hangsx = $request->hangsx;
        $product->dongxe = $request->dongxe;
        $product->namsx = $request->namsx;
        $product->phienban = $request->phienban;
        $product->sokmdadi = $request->sokmdadi;
        $product->hopso = $request->hopso;
        $product->dandong = $request->dandong;
        $product->nhienlieu = $request->nhienlieu;
        $product->giaban= $request->giaban;
        $product->tieudetin = $request->title_tin;
        $product->motachitiet = $request->title_tin_ct;
       
        $product->save();
        return redirect()->route('dangtin');
     
       
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
        $product = product::findOrFail($id);
        $pageName = 'product - Update';
        return view('/Admin/update_dangtin', compact('product', 'pageName'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if($request->has('hinhanh')){
            $file = $request->hinhanh;
            $ext = $request->hinhanh->extension();
            $file_name = time().'-'.'product.'.$ext;
            // dd($file_name);
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['images' => $file_name]);

        $product = product::find($id);
        $product->txtpicture = $file_name;
        $product->hangsx = $request->hangsx;
        $product->dongxe = $request->dongxe;
        $product->namsx = $request->namsx;
        $product->phienban = $request->phienban;
        $product->sokmdadi = $request->sokmdadi;
        $product->giaban= $request->giaban;
        $product->tieudetin = $request->title_tin;
        $product->motachitiet = $request->title_tin_ct;
       
        $product->save();
        return redirect()->route('AdminTin')->with('edit', 'Sửa Dữ liệu Thành Công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = product::find($id);

        $product->delete();

        return redirect()->route('AdminTin')->with('delete', 'Xóa Dữ liệu Thành Công.'); 
    }
}
