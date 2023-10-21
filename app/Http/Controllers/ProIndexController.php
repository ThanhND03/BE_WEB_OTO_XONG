<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProIndex;
use Illuminate\Support\Facades\DB;

class ProIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_index = DB::table('product_index')->select('*');
        $product_index = $product_index->paginate(4);
        // search
        if($search = request()->txtsearch){
            $product_index = DB::table("product_index")->where("hangsx", "like", "%$search%")->paginate(4);
        }   
        // end search
        $pageName = 'Tên Trang - User';

        return view ('Admin/List_dangtin_index', compact('product_index', 'pageName'));
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

        $product_index = new ProIndex;
        $product_index->khuvuc = $request->khuvuc;
        $product_index->tinhtrang = $request->tinhtrang;
        // $product_index->txtpicture = $request->hinhanh;
        $product_index->txtpicture = $file_name;
        $product_index->hangsx = $request->hangsx;
        $product_index->dongxe = $request->dongxe;
        $product_index->namsx = $request->namsx;
        $product_index->phienban = $request->phienban;
        $product_index->sokmdadi = $request->sokmdadi;
        $product_index->hopso = $request->hopso;
        $product_index->dandong = $request->dandong;
        $product_index->nhienlieu = $request->nhienlieu;
        $product_index->giaban= $request->giaban;
        $product_index->tieudetin = $request->title_tin;
        $product_index->motachitiet = $request->title_tin_ct;
       
        $product_index->save();

        return redirect()->route('dangtin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product_index = ProIndex::where('id', '=', $id)->select('*')->first();
        $des = html_entity_decode($product_index->description);
        return view('/User/chitiet', compact('product_index', 'des')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product_index = ProIndex::findOrFail($id);
        $pageName = 'product - Update';
        return view('/Admin/update_dangtin_index', compact('product_index', 'pageName'));
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

        $product_index = ProIndex::find($id);
        $product_index->txtpicture = $file_name;
        $product_index->hangsx = $request->hangsx;
        $product_index->dongxe = $request->dongxe;
        $product_index->namsx = $request->namsx;
        $product_index->phienban = $request->phienban;
        $product_index->sokmdadi = $request->sokmdadi;
        $product_index->giaban= $request->giaban;
        $product_index->tieudetin = $request->title_tin;
        $product_index->motachitiet = $request->title_tin_ct;
       
        $product_index->save();
        return redirect()->route('AdminTinIndex')->with('edit', 'Sửa Dữ liệu Thành Công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product_index = ProIndex::find($id);

        $product_index->delete();

        return redirect()->route('AdminTin')->with('delete', 'Xóa Dữ liệu Thành Công.'); 
    }
}
