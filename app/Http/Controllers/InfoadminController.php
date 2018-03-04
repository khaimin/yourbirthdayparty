<?php

namespace App\Http\Controllers;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\LoaiSanPham;
use App\SanPham;
use Auth;
use App\User;
use Hash;
use File;
use Validator;


class InfoadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        if(Auth::check()){
        if(isset($_GET['changes']) && $_GET['changes']=='1'){
            $password= Auth::user()->password;
             return view('admin.pages.infoadmin.index',compact('password'));
        }
        else
             {
                   
            return view('admin.pages.infoadmin.index');
            }
        }
       
    }
      public function change(Request $request )
    {
        if($request && $request->password_new ==null)
        {
            if($request->file('fimage')==null)
            {
                $id=Auth::user()->id;
                User::where('id', $id)->update(array(
                'name' =>  $request->name,
                'diachi' =>  $request->diachi,
                ));
                return redirect('/admin/infoadmin')->with(['flash_level'=>'success','flash_message'=>'cập nhật thông tin thành công']);
            }
            else{
                $id=Auth::user()->id;
                $file_name = $request->file('fimage')->getClientOriginalName();
                $request->file('fimage')->move('resources/upload/avatar',$file_name);  
                User::where('id', $id)->update(array(
                'name' =>  $request->name,
                'diachi' =>  $request->diachi,
                'avatar'=>$file_name
                ));
           return redirect('/admin/infoadmin')->with(['flash_level'=>'success','flash_message'=>'cập nhật thông tin thành công']);
            } 
        }
        if($request && $request->password_new !=null)
        {
            $password_old=Auth::user()->password;
            if(Hash::check($request->password_old,$password_old)){
                if($request->file('fimage')==null){
                    $id=Auth::user()->id;
                    User::where('id', $id)->update(array(
                    'name' =>  $request->name,
                    'diachi' =>  $request->diachi,
                    'password'=>bcrypt($request->password_new),
                    ));
                return redirect('/admin/infoadmin')->with(['flash_level'=>'success','flash_message'=>'cập nhật thông tin thành công']);
                }
                else{
                    $id=Auth::user()->id;
                    $file_name = $request->file('fimage')->getClientOriginalName();
                    $request->file('fimage')->move('resources/upload/avatar',$file_name);  
                    User::where('id', $id)->update(array(
                     'name' =>  $request->name,
                     'diachi' =>  $request->diachi,
                     'password'=>bcrypt($request->password_new),
                     'avatar'=>$file_name
                    ));
                 return redirect('/admin/infoadmin')->with(['flash_level'=>'success','flash_message'=>'cập nhật thông tin thành công']);
                }
                    
            }
             else{
               return redirect('/admin/infoadmin')->with(['flash_level'=>'danger','flash_message'=>'mật khẩu sai !!']);
            }

        }

        return view('admin.pages.infoadmin.index');
    }


}

 