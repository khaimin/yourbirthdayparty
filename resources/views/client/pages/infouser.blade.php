@extends('client.master')
@section('head.title')
Cakes
@stop
@section('body.content')

<div class="content gallery pad1">
  
<div class="container w3-padd " margin-top="60px">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Thông tin tài khoản</h4>
         <p class="w3-center"><img src="{{asset('resources/upload/sanpham/'.Auth::user()->avatar)}}" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>{{Auth::user()->name}}</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> {{Auth::user()->diachi}}</p>
         <p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i>{{Auth::user()->email}}</p>
         <p><i class="fa fa-smile-o fa-fw w3-margin-right w3-text-theme"></i>1/2/1988</p>
         <p><i class="fa fa-phone fa-fw w3-margin-right w3-text-theme"></i>0983324904</p>
         
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
         <a href="{{route('changeinfouser') }}" <button  class="w3-button w3-green w3-margin-bottom w3-margin-top w3-round-medium">Chỉnh sửa thông tin cá nhân <i class="fa fa-arrow-right "></i></button></a>
      </div>
    
     
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
     <h4 class="w3-center" style="color:#f44336 ">Thông tin đơn hàng</h4>
    <div class="w3-col m7 margin-left7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
       
        
         <div class="w3-row-padding w3-margin-top">
 
  @foreach($data as $data)
  
    <div class="w3-third w3-container w3-margin-bottom">
     <a href="{{route('infosp',['id'=>$data->id])}}" > <img src="{{asset('resources/upload/sanpham/'.$data->hinh)}}" alt="Norway" style="width:100%; height: 200px" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
      <a href="{{route('infosp',['id'=>$data->id])}}" >  <p><h3 style="text-align: center;">{{ $data->tenSP}}</h3></p></a>
         <p style="font-family: sans-serif; text-align:left;">{{str_limit($data->mota, $limit = 60, $end = '...')}}</p>
      </div>
    </div>
        @endforeach  
  
     </div>
            <a href="{{route('donhang') }}"  > <button  class="w3-button  w3-margin-bottom w3-margin-top w3-right w3-round-medium" style="background: #f44336">Thanh Toán <i class="fa fa-arrow-right "></i></button></a>

             </div>
          </div>
        </div>
      </div>
      
     
    <!-- End Middle Column -->
    </div>
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
 
</div>
<!-- Button HTML (to Trigger Modal) -->
<!-- Modal HTML -->

