<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Hoadon;
use App\Cthd;
use App\User;
use App\SanPham;
use App\LoaiSanPham;
use Auth;
use App\Http\Controllers\Carbon;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
class ThongKeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    if(Auth::check()){
        $rule=Auth::user()->rule;
        if(Auth::user()->rule>0){
         $thongke = Hoadon::All();
         $sohoadon=Hoadon::count('id');
         $tipnhan=Hoadon::where('trangthai',0)->count('trangthai');
         $xuly=Hoadon::where('trangthai',1)->count('trangthai');
         $doanhthu=Cthd::sum('ghichu');
        } else {
          $thongke=Cthd::join('san_phams', 'Cthd.idSP', '=', 'san_phams.id')
            ->join('hoadon', 'Cthd.sohd', '=', 'hoadon.id')
            ->where('san_phams.idNCC',$rule)
            
            ->count('Cthd.sohd');
            


        }
        

        return view('admin.pages.thongke.index', compact('thongke','sohoadon','tipnhan','xuly','doanhthu','hd'));
        }
        else return redirect()->route('login');
    }
        public function  quanliuser()
    {
    if(Auth::check()){
         $thongke = User::where('rule',0)->get();
         $sohoadon=Hoadon::count('id');
         $tipnhan=Hoadon::where('trangthai',0)->count('trangthai');
         $xuly=Hoadon::where('trangthai',1)->count('trangthai');
         $doanhthu=Hoadon::sum('tongtien');
        return view('admin.pages.thongke.quanliuser', compact('thongke','sohoadon','tipnhan','xuly','doanhthu','hd'));
    }
   }
    public function  themnguoidung()
    {
    if(Auth::check()){
         $sohoadon=Hoadon::count('id');
         $tipnhan=Hoadon::where('trangthai',0)->count('trangthai');
         $xuly=Hoadon::where('trangthai',1)->count('trangthai');
         $doanhthu=Hoadon::sum('tongtien');
         if(isset($_GET['rule']) )
         {
           return view('admin.pages.thongke.themnguoidung', compact('sohoadon','tipnhan','xuly','doanhthu','hd'));
          }else  return redirect()->back();

    
    }
   }
  public function  themnuser(Request $request)
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
            $data->rule=$_GET['rule'];
            $data->status=2;
           
            if($data->save()){
              if($_GET['rule']==2){
                return  redirect('admin/nhacc');
              }else{
                return  redirect('admin/thongke/quanliuser');
              }


            }

            
        }
       return redirect()->back();
    }
   }

   
}


 