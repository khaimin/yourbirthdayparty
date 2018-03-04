@extends('client.master')
@section('head.title')
Cakes
@stop
@section('body.content')

  <div class="w3-padd pad1" >
    <div class="row pad1 w3-margin-left">
      @if(Session::has('flash_message'))
                <div class="x_content bs-example-popovers">
                  <div style="text-align: center;color: green" class="alert alert-{!! Session::get('flash_level')!!} alert-dismissible fade in" role="alert">
                 
                    
                    <strong > {!! Session::get('flash_message')!!}</strong>
                  </div>
                </div>
   @endif
    <div class="w3-container w3-padding-16" >
    <h5 style="font-size: 30px">Thông tin đặt hàng</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr style="background: #F38881" >
        <td># </td>
        <td>Tên Sản Phẩm</td>
        <td>Hình ảnh</td>
        <td>Số lượng </td>
        <td>Giá </td>
        <td>Tổng </td>
        <td>Công cụ </td>
      </tr>
       @foreach($check_hoadon as $data)
      <tr>
            <td>#</td>
            <td style="padding-top: 15px;">{{$data->tenSP}}</td>
            <td><img src="{{asset('resources/upload/sanpham/'.$data->hinh)}}" width="80px" height="40px"  alt=""></td>
             
            <td>
            <a href="{{route('donhang',['sub'=>0,'id'=>$data->id])}}"> <i class="fa fa-minus-square w3-text-blue w3-large" style="margin-top: 10px;"></i> </a>
              <label class="w3-button w3-theme-d1 w3-margin-bottom w3-border"> {{$data->soluong}} </label> 
            <a href="{{route('donhang',['sub'=>1,'id'=>$data->id])}}">  <i class="fa fa-plus-square w3-text-blue w3-large"  style="margin-top: 10px;"></i></a>
            </td>
            <td  style="padding-top: 15px;">{{$data->dongia}}VND</td>
            <td style="padding-top: 15px;">{{$data->ghichu}}VND</td>
            <td style="padding-top: 15px;"> <a href="{{route('donhang',['sub'=>2,'id'=>$data->id])}}"> <label style="color: blue">Xóa</label></a></td>
      </tr>
        @endforeach  
     
    </table>
    		<div class="w3-row-padding " style="margin:0 -16px">
      
      <div class="w3-twothird w3-col s4 w3-right col-xs-offset-1" >
        <h5>Thông tin đơn hàng </h5>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
          <tr>
            <td><i class="fa fa-check-square-o w3-text-blue w3-large"></i></td>
            <td>Phí tạm tính</td>
            <td><i>{{$tongtien}}VND</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-money w3-text-red w3-large"></i></td>
            <td>Thành tiền</td>
            <td><i>{{$tongtien}} VND</i></td>

          </tr>
        
        </table>
        <br>
      <a href="{{route('thanhtien',['thanhtien'=>$tongtien])}}"> <button  class="w3-button w3-red w3-round-medium   ">Xác nhận đơn hàng  <i class="fa fa-arrow-right "></i></button></a>
  
  
      </div>
    </div>

  </div>
    </div>


