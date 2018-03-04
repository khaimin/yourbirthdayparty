<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\SanPham;
<<<<<<< HEAD
use App\Blog;
use App\Cthd;
use App\Hoadon;
use App\User;
use Auth;
=======
use Auth;

>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
      if(Auth::check()){
            $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
            if($check_hoadon==null){
              $numb=0;
              $banhkem =SanPham::select('id','idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', '1')->where('trangthai', '1')->limit(3)->get();
              $quatang =SanPham::select('id','idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', '2')->where('trangthai', '1')->limit(3)->get();
              $thucan  =SanPham::select('id','idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', '3')->where('trangthai', '1')->limit(3)->get();
              $blog = Blog::select('id','idTin', 'tieude', 'mota' , 'created_at')->orderBy('id','desc')->limit(2)->get();
               return view('client.pages.index', compact('banhkem','quatang','thucan', 'numb', 'blog'));
            }else{

              $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
                  
              $banhkem =SanPham::select('id','idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', '1')->where('trangthai', '1')->limit(3)->get();
              $quatang =SanPham::select('id','idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', '2')->where('trangthai', '1')->limit(3)->get();
              $thucan  =SanPham::select('id','idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', '3')->where('trangthai', '1')->limit(3)->get();
              $blog = Blog::select('id','idTin', 'tieude', 'mota' , 'created_at')->orderBy('id','desc')->limit(2)->get();
             return view('client.pages.index', compact('banhkem','quatang','thucan', 'numb','blog'));
           }
      }
      else{
      $banhkem =SanPham::select('id','idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', '1')->where('trangthai', '1')->limit(3)->get();
      $quatang =SanPham::select('id','idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', '2')->where('trangthai', '1')->limit(3)->get();
      $thucan  =SanPham::select('id','idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', '3')->where('trangthai', '1')->limit(3)->get();
      $blog = Blog::select('id','idTin', 'tieude', 'mota' , 'created_at')->orderBy('id','desc')->limit(2)->get();
        return view('client.pages.index', compact('banhkem','quatang','thucan','blog'));
      }
=======
        $banhkem=SanPham::select('idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', 'banh-kem')->limit(3)->get();
        $quatang=SanPham::select('idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', 'qua-tang')->limit(3)->get();
        $thucan=SanPham::select('idSP', 'tenSP', 'icon', 'hinh')->where('idLoai', 'thuc-an')->limit(3)->get();
        return view('client.pages.index', compact('banhkem','quatang','thucan'));
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function banhkem()
    {   
        if(Auth::check()){
            $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
            if( $check_hoadon==null){
              $numb=0;
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
          }
            $data= SanPham::where('idLoai','1')->where('trangthai', '1')->get();
            return view('client.pages.banhkem', compact('data','numb'));
          }
        $data= SanPham::where('idLoai','1')->where('trangthai', '1')->get();
        return view('client.pages.banhkem', compact('data'));
    }
       public function thucan()
    {
        if(Auth::check()){
             $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
            if( $check_hoadon==null){
              $numb=0;
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
          }
             $data= SanPham::where('idLoai','3')->where('trangthai', '1')->get();
      return view('client.pages.thucan', compact('data','numb'));
          }
       $data= SanPham::where('idLoai','3')->where('trangthai', '1')->get();
      return view('client.pages.thucan', compact('data'));
    }
       public function quatang()
    {
      if(Auth::check()){
            $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
           if( $check_hoadon==null){
              $numb=0;
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
          }
             $data= SanPham::where('idLoai','2')->where('trangthai', '1')->get();
      return view('client.pages.quatang', compact('data','numb'));
          }
        $data= SanPham::where('idLoai','2')->where('trangthai', '1')->get();
       return view('client.pages.quatang', compact('data'));
    }
       public function trangtri()
    {
<<<<<<< HEAD
      if(Auth::check()){
           $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
           if( $check_hoadon==null){
              $numb=0;
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
          }
             $data= SanPham::where('idLoai','4')->where('trangthai', '1')->get();
      return view('client.pages.trangtri', compact('data','numb'));
          }
       $data= SanPham::where('idLoai','4')->where('trangthai', '1')->get();
      
        return view('client.pages.trangtri', compact('data'));
    }
    public function blog()
    {
      if(Auth::check()){
             $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
            if( $check_hoadon==null){
              $numb=0;
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
          }
             if(isset($_GET['id'])){
            $data =Blog::where('id',$_GET['id'])->get(); 
             
            $top4=Blog::select('*')->orderBy('idtin', 'asc')->skip(0)->take(1)->get();
            
        $xemnhieu=Blog::select('*')->orderBy('idtin', 'asc')->skip(2)->take(4)->get();
         return view('client.pages.bloginfo',compact('data','top4','xemnhieu','numb'));
        }

        else {
              $data= Blog::select('*')->orderBy('idtin', 'asc')->get();
                $top4=Blog::select('*')->orderBy('idtin', 'asc')->skip(1)->take(1)->get();
        $xemnhieu=Blog::select('*')->orderBy('idtin', 'asc')->skip(2)->take(4)->get();
         return view('client.pages.blog',compact('data','top4','xemnhieu','numb'));
        }
          }
        if(isset($_GET['id'])){
            $data =Blog::where('id',$_GET['id'])->get(); 
             
              $top4=Blog::select('*')->orderBy('idtin', 'asc')->skip(0)->take(1)->get();
            
        $xemnhieu=Blog::select('*')->orderBy('idtin', 'asc')->skip(2)->take(4)->get();
         return view('client.pages.bloginfo',compact('data','top4','xemnhieu','numb'));
        }

        else {
              $data= Blog::select('*')->orderBy('idtin', 'asc')->get();
                $top4=Blog::select('*')->orderBy('idtin', 'asc')->skip(1)->take(1)->get();
        $xemnhieu=Blog::select('*')->orderBy('idtin', 'asc')->skip(2)->take(4)->get();
         return view('client.pages.blog',compact('data','top4','xemnhieu','numb'));
        }
      
=======
        $data= SanPham::where('idLoai', 'banh-kem')->simplePaginate(3);

        return view('client.pages.banhkem')->with('data',$data);
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    }
    public function donhang()
    {
<<<<<<< HEAD
          if(Auth::check()){

            $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
           if( $check_hoadon==null){
              $numb=0;
               $tongtien=0;
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
             $tongtien=Cthd::where('sohd',$check_hoadon->id)->sum('ghichu');
          }
            

            $check_hoadon=Cthd::join('san_phams', 'Cthd.idSP', '=', 'san_phams.id')
            ->join('hoadon', 'Cthd.sohd', '=', 'hoadon.id')
            ->where('Hoadon.user_id',$user)
            ->where('Cthd.soluong','>',0)
            ->select('san_phams.tenSP','san_phams.hinh','Cthd.soluong','san_phams.dongia','Cthd.ghichu','Cthd.id')
            ->get();


             if(isset($_GET['sub'])){
              if($_GET['sub']==0){
                      $tinh=Cthd::select('soluong','ghichu')->where('id',$_GET['id'])->first();//kt soluong cthd
                      $dongia=$tinh->ghichu/$tinh->soluong;
                       Cthd::where('id',$_GET['id'])->update(array(
                'soluong'    => ($tinh->soluong -1),
                'ghichu'=>($tinh->soluong - 1)*$dongia,
                 ));
                return redirect()->back();
                 }
              if($_GET['sub']==1){
                      $tinh=Cthd::select('soluong','ghichu')->where('id',$_GET['id'])->first();//kt soluong cthd
                      $dongia=$tinh->ghichu/$tinh->soluong;
                       Cthd::where('id',$_GET['id'])->update(array(
                'soluong'    => ($tinh->soluong +1),
                'ghichu'=>($tinh->soluong + 1)*$dongia,
                 ));
                return redirect()->back();
                 }
              if($_GET['sub']==2){
                      $tinh=Cthd::select('soluong','ghichu')->where('id',$_GET['id'])->first();//kt soluong cthd
                      $dongia=$tinh->ghichu/$tinh->soluong;
                       Cthd::where('id',$_GET['id'])->update(array(
                'soluong'    => 0,
                'ghichu'=>0,
                 ));
                return redirect()->back();
                 }

             }
           } 
          
      return view('client.pages.donhang', compact('check_hoadon','numb','tongtien'));
=======
        $data= SanPham::where('idLoai', 'thuc-an')->simplePaginate(3);

        return view('client.pages.thucan')->with('data',$data);
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    }
      
    

    public function datsp()
    {
<<<<<<< HEAD
          if(Auth::check()){
            $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
             if( $check_hoadon==null){
              $numb=0;
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
          }
          }

          if(Auth::check()){

             if(isset($check_hoadon)){
               $check_cthd=Cthd::join('san_phams', 'Cthd.idSP', '=', 'san_phams.id')
               ->where('sohd',$check_hoadon->id)
               ->where('Cthd.idSP',$_GET['id'])
               ->select('Cthd.id','Cthd.soluong')
               ->first();
              $dongia_sp=SanPham::select('dongia')->where('id',$_GET['id'])->first();
           
               if(isset($check_cthd)){
=======
        $data= SanPham::All()->where('idLoai', 'qua-tang');
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0

                 Cthd::where('id', $check_cthd->id)->update(array(
                'soluong'    => ($check_cthd->soluong + 1),
                'ghichu'=>($check_cthd->soluong + 1)*$dongia_sp->dongia,
                 ));
               return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Đặt hàng thành công']);;
               }else{

                $cthd=new Cthd;
                $cthd->soluong=$cthd->soluong+1;
                $cthd->idSP=$_GET['id'];
                $cthd->sohd=$check_hoadon->id;
                $cthd->mota="";
                $cthd->ghichu=$dongia_sp->dongia;
                $cthd->save();
            
              return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Đặt hàng thành công']);;
               }
             }else 
             return redirect()->back()->with(['flash_level'=>'warning','flash_message'=>'Bạn chưa chọn này tổ chức!! vui lòng chọn ngày tổ chức phía trên!']);
                       }else
             return redirect('admin/login');
      
    }
      public function infosp(Request $request)
    {
<<<<<<< HEAD
      if(Auth::check()){
            $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
            if( $check_hoadon==null){
              $numb=0;
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
          }
        } //
=======
        $data= SanPham::All()->where('idLoai', 'trang-tri');
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0

         if(isset($request->soluong) && $request->soluong>0)
        {
          if(Auth::check()){
              $dongia_sp=SanPham::select('dongia')->where('id',$_GET['id'])->first();
            if(isset($check_hoadon)){
              $check_cthd=Cthd::join('san_phams', 'Cthd.idSP', '=', 'san_phams.id')
            ->where('sohd',$check_hoadon->id)
            ->where('Cthd.idSP',$_GET['id'])
            ->select('Cthd.id','Cthd.soluong')
            ->first();
          
              if(isset($check_cthd))
              {
                 Cthd::where('id', $check_cthd->id)->update(array(
            'soluong'    => ($request->soluong + $check_cthd->soluong),
            'ghichu'=>($request->soluong + $check_cthd->soluong)*$dongia_sp->dongia
            ));
                  return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Đặt hàng thành công']);
              }else{
              $cthd=new Cthd;
              $cthd->soluong=$request->soluong;
              $cthd->idSP=$_GET['id'];
              $cthd->sohd=$check_hoadon->id;
              $cthd->mota="";
              $cthd->ghichu=$dongia_sp->dongia;
              $cthd->save();
              $data =SanPham::where('id',$_GET['id'])->get(); 
              $xemnhieu=SanPham::select('*')->orderBy('id', 'desc')->skip(0)->take(3)->get();
               return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Đặt hàng thành công']);
              }

             /* $sohd=Hoadon::select('id')->where('user_id',$user)->first();
              $cthd=new Cthd;
              $cthd->soluong=$request->soluong;
              $cthd->idSP=$_GET['id'];
              $cthd->sohd=$sohd->id;
              $cthd->mota="";
              $cthd->ghichu=0;
              $cthd->save();
              $data =SanPham::where('id',$_GET['id'])->get(); 
              $xemnhieu=SanPham::select('*')->orderBy('id', 'desc')->skip(0)->take(3)->get();
             return redirect()->back();*/
            }else {
              return redirect()->back()->with(['flash_level'=>'warning','flash_message'=>'Bạn chưa chọn này tổ chức!! vui lòng chọn ngày tổ chức phía trên!']);
            }
           }else
             return redirect('admin/login');
        }
      
       //
        if(isset($_GET['id'])){
            $data =SanPham::where('id',$_GET['id'])->get(); 
        }

      $xemnhieu=SanPham::select('*')->orderBy('id', 'desc')->skip(0)->take(4)->get();
         return view('client.pages.infosp',compact('data','xemnhieu','numb'));
        
        
    }
  public function infouser()
    {   
       if(Auth::check()){
            $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
            if( $check_hoadon==null){
              $numb=0;
             $data=[];
              return  view('client.pages.infouser',compact('data','check_hoadon','numb'));
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
          }
            $data=Cthd::join('san_phams', 'Cthd.idSP', '=', 'san_phams.id')
            ->where('sohd',$check_hoadon->id)
            ->select('san_phams.tenSP','san_phams.hinh','san_phams.mota','san_phams.id')
            ->get();
        } 
        return  view('client.pages.infouser',compact('data','check_hoadon','numb'));
    }
      public function changeinfouser()
    {   
       if(Auth::check()){
            $user=Auth::user()->id;
            $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
           if( $check_hoadon==null){
              $numb=0;
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
          }
            
        } 
        return  view('client.pages.changeinfouser',compact('data','check_hoadon','numb'));
    }

  public function dathang(Request $request)//dat ngay to chuc
    {
          if(Auth::check()){
            $user=Auth::user()->id;
             $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
           if( $check_hoadon==null){
              $numb=0;
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
          }
          }
         
          if(isset($check_hoadon)){
             $request->ngaytochuc= date('Y-m-d H:i:s');
             Hoadon::where('user_id', $user)->update(array(
            'ghichu'    =>  $request->ngaytochuc,
            ));
            return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Cập nhật ngày tổ chức thành công!!','flash_status'=>'green']);
          } else{
             $Hoadon=new Hoadon;
              $Hoadon->sohd=$user;
              $Hoadon->user_id=$user;
              $Hoadon->tongtien=0;
              $Hoadon->trangthai="0";
              $Hoadon->ghichu="0";
              $Hoadon->nghd=$request->ngaytochuc;
              $Hoadon->nghd= date('Y-m-d H:i:s');   
              $Hoadon->save();
              return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Đặt ngày tổ chức thành công','flash_status'=>'green']);
          }
         
     
    }
    /* public function dathang(Request $request)
    {
        if($request->soluong)
        {
            var_dump($request->soluong);die() ;
        }
       
        //kiểm tra user có đơn hàng chưa
        //chưa có thì tạo mới
        //có rồi thì update đơn hàng
          $data= new Cthd;
          $data->sohd=1;
          $data->soluong=$request->soluong;
          $data->idSP=$Request->soluong;
        return "view('client.pages.nhap')";
    }*/
       public function thanhtien()
    {
      if(Auth::check()){
           $user=Auth::user()->id;
           $check_hoadon=Hoadon::select('id')->where('user_id',$user)->first();
           if( $check_hoadon==null){
              $numb=0;
               return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Thanh toán thất bại','flash_status'=>'green']);
            }else{
             $numb=Cthd::where('sohd',$check_hoadon->id)->sum('soluong');
             Hoadon::where('sohd', $user)->update(array(
            'tongtien'    => $_GET['thanhtien'],
            ));
              return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Thanh toán thành công','flash_status'=>'green']);
            }
      }
             
      
       
    }
    function lienhe()
    {return view('client.pages.lienhe');}
    
}