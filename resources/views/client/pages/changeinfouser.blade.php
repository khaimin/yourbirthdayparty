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
         <p class="w3-center"><img src="public/images/logot_burned.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>Họ và tên</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> địa chỉ</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>1/2/1988</p>
         
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
         <a href="{{route('changeinfouser') }}" <button  class="w3-button w3-green w3-margin-bottom w3-margin-top">Chỉnh sửa thông tin cá nhân <ie class="fa fa-arrow-right "></i></button></a>
      </div>
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
       <a href="{{route('donhang') }}"   <button  class="w3-button  w3-margin-bottom w3-margin-top w3-right" style="background: #f44336">Thanh Toán <i class="fa fa-arrow-right "></i></button></a>
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
aa
  </div>
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

