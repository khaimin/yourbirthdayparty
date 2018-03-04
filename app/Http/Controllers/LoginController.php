<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
<<<<<<< HEAD
use App\SanPham;
use Session;
use Validator;
use Auth;
use File;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
=======
use Session;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0

class LoginController extends Controller
{
    /**
     * hiển thị trang đăng ký user.
     *
     * @return views\auth\register.blade.php
     */
    public function register(){
<<<<<<< HEAD
      return view('admin.pages.admin.register');
=======
        if(Auth::check()){
            return view('auth.register');
        }
        else return redirect()->route('login');
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    }
    /**
     * thêm 1 user mới.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \admin\page\setup\setupindex
     */
    public function create(Request $request){
<<<<<<< HEAD
    
        $rules = [
            'email' =>'required|unique:users|email',
            'hotten'=>'required',
            'fimage'=>'required',
            'diachi'=>'required',
=======
        $rules = [
            'email' =>'required|unique:users|email',
            'rule' => 'required',
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
            'password' => 'required|min:6|confirmed',
            'password_confirmation'=> 'required|same:password'
        ];
        $messages = [
<<<<<<< HEAD
            'email.required' => 'Email không được trống',
            'hotten.required' => 'Họ và Tên không được trống',
            'fimage.required' => 'avatar không được trống',
            'diachi.required' => 'diachi không được trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu không được trống',
            'password_confirmation.required'=> 'Mật khẩu không được trống'
=======
            'email.required' => 'Email is required',
            'rule.required' => 'Quyền is required',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Password is required',
            'password_confirmation.required'=> 'Password Confirmation is required'
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0

        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
<<<<<<< HEAD
           
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
            $data->rule=0;
            $data->status=2;
=======
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $data =new User();
            $data->name= $request->name;
            $data->email= $request->email;
            $data->password= bcrypt($request->password);
            $data->rule=$request->rule;
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
            $data->save();
            return redirect()->route('admin.index');
        }
    }
    /**
     * hiển thị trang đăng nhập user.
     *
     * @return views\auth\login.blade.php
     */
    public function index(){
<<<<<<< HEAD
        return view('admin.pages.admin.login');
=======
        return view('admin.auth.login');
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    }
    /**
     * kiểm tra đăng nhập user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return views\admin\page\index
     */
    public function login(Request $request) {
<<<<<<< HEAD
     
=======
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
        $rules = [
            'email' =>'required|email',
            'password' => 'required'
        ];
        $messages = [
<<<<<<< HEAD
            'email.required' => 'Email không được trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu không được trống',
=======
            'email.required' => 'Email is required',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Password is required',
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0

        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $email = $request->input('email');
            $password = $request->input('password');

<<<<<<< HEAD
             if( Auth::attempt(['email' => $email, 'password' =>$password,'rule'=>'1'])||
                Auth::attempt(['email' => $email, 'password' =>$password,'rule'=>'2'])||
                Auth::attempt(['email' => $email, 'password' =>$password,'rule'=>'3'])||
                Auth::attempt(['email' => $email, 'password' =>$password,'rule'=>'4'])||
                Auth::attempt(['email' => $email, 'password' =>$password,'rule'=>'5'])||
                Auth::attempt(['email' => $email, 'password' =>$password,'rule'=>'6'])||
                Auth::attempt(['email' => $email, 'password' =>$password,'rule'=>'7'])||
                Auth::attempt(['email' => $email, 'password' =>$password,'rule'=>'1001'])
                ) {
                return redirect()->route('admin.thongke.index');
            }
            else if( Auth::attempt(['email' => $email, 'password' =>$password,'rule'=>0])){
                $name=Auth::user()->name;
                 return redirect()->route('index',compact('name'));
            }
             else {
                $errors = new MessageBag(['errorlogin' => 'Địa chỉ email hoặc mật khẩu không đúng']);
=======
            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                if(Auth::user()->rule==3){
                    return redirect()->route('index');
                }
                else{
                    return redirect()->route('admin.index');
                }
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email and password do not match']);
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }
    /**
     * đăng xuất user khỏi hệ thống.
     *
     * @return views\auth\login.blade.php
     */
    public function logout(){
<<<<<<< HEAD
       
        Auth::logout();
        Session::flush();
         $banhkem =SanPham::select('idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', 'banh-kem')->limit(3)->get();
          $quatang =SanPham::select('idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', 'qua-tang')->limit(3)->get();
          $thucan  =SanPham::select('idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', 'thuc-an')->limit(3)->get();
        return redirect()->route('index',compact('banhkem', 'quatang', 'thucan'));
=======
        Auth::logout();
        Session::flush();
        return redirect()->route('index');
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    }
}
