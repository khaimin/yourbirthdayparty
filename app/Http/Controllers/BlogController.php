<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use File;

class BlogController extends Controller
{ 
    public function index()
    {
        $data = Blog::select('id','idTin','tieude','title','mota','noidung','hinhanh','created_at')->orderBy('id','desc')->get();

        return view('admin.pages.blog.index', compact('data'));
    }
   
    public function update($id)
    {
      $data =Blog::where('idTin',$id)->first();
         return view('admin.pages.blog.edit',compact('data'));
      
    }
         public function updatedata(Request $request,$id)
    {
        if($request->file('hinhanh')==null)
        {
            $tieude = $request->tieude;
            $title = $request->title;
            $mota = $request->mota;
            $noidung = $request->noidung;
            Blog::where('idTin', $id)->update(array(
            'tieude' =>  $tieude,
            'title' => $title,
            'mota' => $mota,
            'noidung' => $noidung,

            ));
  
            return redirect()->route('admin.blog.index')->with(['flash_level'=>'success','flash_message'=>'Cập nhật tin tức thành công']);
        }
        else{
            $tieude = $request->tieude;
            $title = $request->title;
            $mota = $request->mota;
            $noidung = $request->noidung;
            $hinhanh = $request->file('hinhanh')->getClientOriginalName();
            $request->file('hinhanh')->move('resources/upload/sanpham',$hinhanh);
           
         Blog::where('idTin', $id)->update(array(
            'tieude' =>  $tieude,
            'title' => $title,
            'mota' => $mota,
            'noidung' => $noidung,
            'hinhanh' => $hinhanh
            ));
  
    return redirect()->route('admin.blog.index')->with(['flash_level'=>'success','flash_message'=>'Cập nhật tin tức thành công']);
        }
    }
      public function destroy($id)
    {
        $data =Blog::where('idTin',$id)->first();
        $data->delete($id);
        return redirect()->route('admin.blog.index')->with(['flash_level'=>'danger','flash_message'=>'Xóa tin thành công']);
    }
     public function create()
    {
        return view('admin.pages.blog.create', compact('data'));
    }
     public function store(Request $request)
    {
        $rules = [
            'tieude'=>'required',
            'title'=>'required',
            'mota'=>'required',
            'noidung'=>'required',
            'hinhanh'=>'required',
            'idTin'=>'required',
            

        ];
        $messages = [

            'tieude.required'=> 'Tiêu đề tin tức không được để trống',
            'title.required'=>' Title tin tức không được để trống',
            'mota.required'=>'Mô tả tin tức không được để trống',
            'noidung.required'=>'Nội dung tin tức không được để trống',
            'hinhanh.required'=>'Hình ảnh tin tức không được để trống',
            'idTin.required'=>'Hình ảnh tin tức không được để trống',
            
           
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
          
            $data            = new Blog;
            $data->tieude      = $request->tieude;
            $data->title    = $request->title;
            $data->mota     = $request->mota;
            $data->noidung    = $request->noidung;
            $data->hinhanh     = $request->hinhanh;
            $data->idTin     = $request->idTin;
           
            $data->save();
            return redirect()->route('admin.blog.index')->with(['flash_level'=>'success','flash_message'=>'Thêm tin tức thành công']);
        }
    }

}
