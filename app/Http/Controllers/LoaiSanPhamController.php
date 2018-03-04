<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSanPham;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LoaiSanPham::select('idLoai', 'tenLoai')->get();
        return view('admin.pages.loaisanpham.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.loaisanpham.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'txtidLoai'=>'required|unique:loai_san_phams,idLoai',
            'txttenLoai'=>'required',
        ];
        $messages = [

            'txtidLoai.required'=> 'Mã loại sản phẩm không được để trống',
            'txtidLoai.unique'=>'Mã loại sản phẩm đã tồn tại, vui lòng chọn mã loại sản phẩm khác',
            'txttenLoai.required'=>'Tên loại sản phẩm không được để trống'
            
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $data= new LoaiSanPham;
            $data->idLoai = $request->txtidLoai;
            $data->tenLoai = $request->txttenLoai;
           if ($data->save()){
            return redirect()->route('admin.loaisanpham.index')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
        }
        else return redirect()->back();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = LoaiSanPham::select('idLoai', 'tenLoai')->where('idLoai',$id)->first();
        return view('admin.pages.loaisanpham.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            
            'txttenLoai'=>'required',
        ];
        $messages = [

            'txttenLoai.required'=>'Tên loại sản phẩm không được để trống'
            
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $tenloai = $request->txttenLoai;
           LoaiSanPham::where('idLoai', $id)->update(array(
                'tenLoai' => $tenloai,
                ));
            return redirect()->route('admin.loaisanpham.index')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =LoaiSanPham::where('idLoai',$id)->first();
        $data->delete($id);
        return redirect()->route('admin.loaisanpham.index')->with(['flash_level'=>'danger','flash_message'=>'Xóa thành công']);
    }
}
