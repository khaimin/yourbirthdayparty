<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\LoaiSanPham;
use App\User;
use Validator;
use App\Hoadon;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use File;
use Auth;
class NhaCCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
           
            $data=User::select('id','name', 'email','avatar','rule', 'diachi', 'status','created_at')
            ->where('status','2')
            ->where('rule','>',0)
            ->where('rule','!=',1001)
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.pages.nhacc.index', compact('data'));
      }
         else return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id){
         $data = User::All()->where('id',$id);
        
        
         return view('admin.pages.nhacc.edit',compact('data'));
        }
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
        if($request->txtstatus==null)
            {
                $rule = 0;
            }
            else{
                $rule = $request->txtstatus;
            }
            User::where('id',$id)->update(array(
            'rule'  => $rule
              ));
    
        return redirect()->route('admin.nhacc.index')->with(['flash_level'=>'success','flash_message'=>'Cập nhật sản phẩm thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function   themncc()
    {
    if(Auth::check()){
         $sohoadon=Hoadon::count('id');
         $tipnhan=Hoadon::where('trangthai',0)->count('trangthai');
         $xuly=Hoadon::where('trangthai',1)->count('trangthai');
         $doanhthu=Hoadon::sum('tongtien');
         $data = LoaisanPham::select('idLoai', 'tenLoai')->get();

         return view('admin.pages.nhacc.themncc', compact('sohoadon','tipnhan','xuly','doanhthu','hd','data'));
       
    
    }
   }
    public function  themnccc(Request $request)
    {
    if(Auth::check()){
                 $thongke = User::where('rule',0)->get();
          $sohoadon=Hoadon::count('id');
          $tipnhan=Hoadon::where('trangthai',0)->count('trangthai');
         $xuly=Hoadon::where('trangthai',1)->count('trangthai');
         $doanhthu=Hoadon::sum('tongtien');
          $rules = [
            'email' =>'required|unique:users|email',
            'hotten'=>'required',
            'fimage'=>'required',
            'diachi'=>'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation'=> 'required|same:password'
        ];
        $messages = [
            'email.required' => 'Email không được trống',
            'hotten.required' => 'Họ và Tên không được trống',
            'fimage.required' => 'avatar không được trống',
            'diachi.required' => 'diachi không được trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu không được trống',
            'password_confirmation.required'=> 'Mật khẩu không được trống'

        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
           
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
           
            $data =new User();
            $data->name= $request->hotten;
            $file_name       = $request->file('fimage')->getClientOriginalName();
            $data->avatar      = $file_name;
            $request->file('fimage')->move('resources/upload/avatar',$file_name);   
            $data->diachi= $request->diachi;
            $data->email= $request->email;
            $data->password= bcrypt($request->password);
            $data->rule=$request->txtidLoai;
            $data->status=2;
           
            if($data->save()){
              
                return  redirect('admin/nhacc');
              }else{
                  return redirect()->back();
              }


            

            
        }
       return redirect()->back();
    }
   }
   
}
