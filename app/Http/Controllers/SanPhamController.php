<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\LoaiSanPham;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use File;
use Auth;
class SanPhamController extends Controller
{
     public function index()
<<<<<<< HEAD
    {
        if(Auth::check()){
            $rule=Auth::user()->rule;
          if($rule==1001){
             $data = SanPham::select('id','idSP','idLoai','tenSP','icon','hinh','mota','dongia', 'trangthai','created_at')->orderBy('id', 'desc')->get();
          }else{
              $data = SanPham::select('id','idSP','idLoai','tenSP','icon','hinh','mota','dongia', 'trangthai','created_at')-> where('idNCC', $rule)
              ->orderBy('id', 'desc')
              ->get();
          }
      

        return view('admin.pages.sanpham.index', compact('data'));
      }
         else return redirect()->route('login');
=======
    {   if(Auth::check()){
            $data = SanPham::All();
            return view('admin.pages.sanpham.index', compact('data'));
        }
        else return redirect()->route('login');
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    }

    public function create()
    {
<<<<<<< HEAD
        $rule=Auth::user()->rule;
        if($rule!=1001){
         $data = LoaisanPham::select('idLoai', 'tenLoai')
         -> where('idLoai', $rule)
         ->get();
        }else{
          $data = LoaisanPham::select('idLoai', 'tenLoai')->get();
        }

        return view('admin.pages.sanpham.create', compact('data'));
=======
        if(Auth::check()){
        $data = LoaisanPham::select('idLoai', 'tenLoai')->get();
        return view('admin.pages.sanpham.create', compact('data'));
        }
        else return redirect()->route('login');
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    }

	 public function store(Request $request)
    {
        $rules = [
            'txtidLoai'=>'required',
            'txtidSP'=>'required | unique:san_phams,idSP',
            'txttensp'=>'required',
            'ficon'=>'required',
            'fimage'=>'required',
            'txtmota'=>'required',
            'txtgia'=>'required',

        ];
        $messages = [

            'txtidSP.required'=> 'Mã loại sản phẩm không được để trống',
            'txtidSP.unique'=>' ID sản phẩm đã tồn tại, vui lòng chọn mã sản phẩm khác',
            'txtidLoai.required'=>'Tên loại sản phẩm không được để trống',
            'txttensp.required'=>'Tên  sản phẩm không được để trống',
            'ficon.required'=>'icon không được để trống',
            'fimage.required'=>'hình sản phẩm không được để trống',
            'txtmota.required'=>'mô tả sản phẩm không được để trống',
            'txtgia.required'=>'giá sản phẩm không được để trống',
           
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
        	  $rule=Auth::user()->rule;
            $data            = new SanPham;
            $data->idSP      = $request->txtidSP;
            $data->idLoai    = $request->txtidLoai;
            $data->tenSP     = $request->txttensp;
            $file_name_icon  = $request->file('ficon')->getClientOriginalName();
            $data->icon      = $file_name_icon;
            $request->file('ficon')->move('resources/upload/sanpham',$file_name_icon);
            $file_name       = $request->file('fimage')->getClientOriginalName();
            $data->hinh      = $file_name;
            $request->file('fimage')->move('resources/upload/sanpham',$file_name);                
            $data->mota      = $request->txtmota;
            $data->dongia    = $request->txtgia;
            $data->idNCC     =  $rule;
            $data->trangthai = 0;

            $data->save();
            return redirect()->route('admin.sanpham.index')->with(['flash_level'=>'success','flash_message'=>'Thêm sản phẩm thành công']);
        }
    }
     public function updatedata(Request $request,$id)
    {
        if($request->file('ficon')==null)
        {
            $idSP = $id;
            $idLoai = $request->txtidLoai;
            $tenSP = $request->txttensp;
            $mota = $request->txtmota;
            $dongia = $request->txtgia;
            $idNCC=1;
            if($request->txtstatus==null)
            {
                $trangthai = 0;
            }
            else{
                $trangthai = $request->txtstatus;
            }
            SanPham::where('idSP', $id)->update(array(
            'idSP'    =>  $id,
            'tenSP' =>  $tenSP,
            'mota' => $mota,
            'dongia' => $dongia,
            'idNCC' => $idNCC,
            'trangthai'  => $trangthai
              ));
    
        return redirect()->route('admin.sanpham.index')->with(['flash_level'=>'success','flash_message'=>'Cập nhật sản phẩm thành công']);
        }
        else
        {
            $idSP = $id;
            $idLoai = $request->txtidLoai;
            $tenSP = $request->txttensp;
            $icon = $request->file('ficon')->getClientOriginalName();
            $request->file('ficon')->move('resources/upload/sanpham',$icon);
            $hinh = $request->file('fimage')->getClientOriginalName();
            $request->file('fimage')->move('resources/upload/sanpham',$hinh);
            $mota = $request->txtmota;
            $dongia = $request->txtgia;
            $idNCC=1;
            if($request->txtstatus==null)
            {
                $trangthai = 0;
            }
            else{
                $trangthai = $request->txtstatus;
            }
            SanPham::where('idSP', $id)->update(array(
            'idSP'    =>  $id,
            'tenSP' =>  $tenSP,
            'icon' => $icon,
            'hinh' => $hinh,
            'mota' => $mota,
            'dongia' => $dongia,
            'idNCC' => $idNCC,
            'trangthai'  => $trangthai
              ));
    
        return redirect()->route('admin.sanpham.index')->with(['flash_level'=>'success','flash_message'=>'Cập nhật sản phẩm thành công']);
        }
            
    }


   
    
    
//     public function status($id,$trangthai)
//     {

//         if(isset($id) && isset($trangthai)){
//             if($trangthai==0){
//     	       SanPham::where('idSP', $id)->update(array(
//                     'trangthai'    =>1,
//                  ));
//             }
//             else
//                   SanPham::where('idSP', $id)->update(array(
//                     'trangthai'    =>0,
//                  ));
//         }
//     	//SanPham::where('idSP', $id)->update('trangthai',$)
//     	return view('admin.pages.sanpham.index');
//     }
//      public function getcreate()
//     {
    	 
//     }
        public function update($id)
    {   
        if(Auth::check()){
        	$data = SanPham::All()->where('idSP',$id)->first();
           	$data1 = LoaisanPham::select('idLoai', 'tenLoai')->get();
           	
        	return view('admin.pages.sanpham.update',compact('data','data1'));
        }
        else return redirect()->route('login');
    }
       public function destroy($id)
    {
        $data =SanPham::where('idSP',$id)->first();
        $data->delete($id);
        return redirect()->route('admin.sanpham.index')->with(['flash_level'=>'danger','flash_message'=>'Xóa sản phẩm thành công']);
    }
    //  public function duyet($id)
    // {
    //     $data =SanPham::where('idSP',$id)->first();
    //     $data->delete($id);
    //     return redirect()->route('admin.sanpham.index')->with(['flash_level'=>'danger','flash_message'=>'Xóa sản phẩm thành công']);
    // }
}