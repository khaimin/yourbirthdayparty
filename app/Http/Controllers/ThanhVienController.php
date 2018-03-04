<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ThanhVien;
use Session;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class ThanhVienController extends Controller
{

    public function register(){
        if(Auth::check()){
            return view('client.auth.register');
        }
        else return redirect()->route('login');
    }
    /**
     * thêm 1 user mới.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \admin\page\setup\setupindex
     */
    public function create(Request $request){
        $rules = [
            'email' =>'required|unique:users|email',
            'rule' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation'=> 'required|same:password'
        ];
        $messages = [
            'email.required' => 'Email is required',
            'rule.required' => 'Quyền is required',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Password is required',
            'password_confirmation.required'=> 'Password Confirmation is required'

        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $data =new ThanhVien();
            $data->name= $request->name;
            $data->email= $request->email;
            $data->password= bcrypt($request->password);
            $data->rule=$request->rule;
            $data->save();
            return redirect()->route('index');
        }
    }
    /**
     * hiển thị trang đăng nhập user.
     *
     * @return views\auth\login.blade.php
     */
    public function index(){
        return view('client.auth.login');
    }
    /**
     * kiểm tra đăng nhập user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return views\admin\page\index
     */
    public function login(Request $request) {
        $rules = [
            'email'    =>'required|email',
            'password' => 'required'
        ];
        $messages = [
            'email.required'    => 'Email is required',
            'email.email'       => 'Email không đúng định dạng',
            'password.required' => 'Password is required',

        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $email = $request->input('email');
            $password = $request->input('password');

            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                return redirect()->route('index');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email and password do not match']);
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
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
