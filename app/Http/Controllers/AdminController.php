<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSanPham;
use App\SanPham;
use Auth;
<<<<<<< HEAD
use App\Blog;
=======
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
<<<<<<< HEAD
    {
        if(Auth::check()){
        $loaisp = LoaiSanPham::select('idLoai')->get();
        $sanpham = SanPham::select('idSP', 'idLoai')->get();
        $blog = Blog::select('idTin')->get();
        return view('admin.pages.index', compact('loaisp', 'sanpham', 'blog'));
=======
    {   if(Auth::check()){
        $loaisp = LoaiSanPham::select('idLoai')->get();
        $sanpham = SanPham::select('idSP', 'idLoai')->get();
        return view('admin.pages.index', compact('loaisp', 'sanpham'));
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
        }
        else return redirect()->route('login');
    }
}

 