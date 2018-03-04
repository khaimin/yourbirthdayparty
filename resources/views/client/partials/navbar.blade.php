<header style="position: fixed; top:-10px;margin-bottom: 10px;" >
<!--==============================
            Stuck menu
=================================-->
<<<<<<< HEAD
<section id="stuck_container"  >
   
<div class="w3-bar ">
  <div class="w3-col s1 ">
    <a href="{{ route('index')}}" class="w3-bar-item w3-button  w3-mobile"><img src ="public/images/logot_burned.png"><label class="roboto" style="text-align: center; "><span style="color: red">H</span><span style='color: green'>appy</span><span style="color: red">S</span><span style="color:blue">imple</span></label></a>
  </div>
  <div class="w3-col s8" > 
     <div class="w3-bar">
      <div class="w3-col s2  w3-margin  w3-margin-top w3-hover-aqua text-center">
       <a href="{{ route('banhkem') }}"> Bánh kem </a>
      </div>
      <div class="w3-col s2  w3-margin  w3-margin-top w3-hover-aqua text-center">
       <a href="{{ route('quatang') }}"> Quà tặng </a>
      </div>
      <div class="w3-col s2  w3-margin  w3-margin-top w3-hover-aqua text-center">
       <a href="{{ route('thucan') }}"> Thức ăn </a>
      </div>
      <div class="w3-col s2  w3-margin  w3-margin-top w3-hover-aqua text-center">
       <a href="{{ route('trangtri') }}"> Trang trí </a>
      </div>
      <div class="w3-col s2  w3-margin  w3-margin-top w3-hover-aqua text-center">
       <a href="{{ route('blog') }}">Blog </a>
      </div>
      <div class="w3-col s2  w3-margin  w3-margin-top w3-hover-aqua text-center">
       <a href="{{ route('lienhe') }}"> Liên hệ </a>
=======
  <section id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <h1>
          <a href="{{ route('index') }}">
            <img src="{{ url('public/images/logo.png') }}" alt="Logo alt">
          </a>
        </h1> 
          <div class="navigation">
            <nav>
              <ul class="sf-menu">
               <li><a href="{{ route('banhkem') }}">bánh</a></li>
               <li><a href="{{ route('quatang') }}">quà</a></li>
               <li><a href="{{ route('thucan') }}">thức ăn</a></li>
               <li><a href="{{ route('trangtri')}}">trang trí</a></li>
               <li><a href="{{ route('blog') }}">blog</a></li>
               <li><a href="{{ route('lienhe') }}">liên hệ</a></li>
              <?php if(isset(Auth::user()->rule)){
                  if(Auth::user()->rule==3){?>
                    <li><a href="">{{ Auth::user()->name }}</a></li>
                    <li>
                        <a href="{{ URL::route('userlogout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout 
                        <form id="logout-form" action="{{ route('userlogout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </a>
                    </li>
              <?php }else{ ?>
                    <li><a href="{{ route('userlogin') }}">đăng nhập</a></li>
                    <li><a href="{{ route('userregister')}}">đăng kí</a></li>
                    <?php }} ?>
               
             </ul>
            </nav>        
            <div class="clear"></div>
          </div>
        </div>
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
      </div>
    </div>
  <div class="w3-col s5 w3-margin-top w3-right ">
      <form id="searchbox" method="get" action="#" autocomplete="off">
        <input name="q" class="w3-white"  type="text"  placeholder="Nhập từ khóa cần tìm..." />
        <input id="button-submit" type="submit" value=" "/>
      </form>
  </div>
   <div class="w3-col s5 w3-margin-top w3-right">
      <form id="searchbox1" method="post" action="{{ route('dathang') }}" autocomplete="off">
       {{ csrf_field() }}
      <i  class=" w3-margin-top tay"></i>  <input data-date-format='yyyy-mm-dd' name="ngaytochuc" type="text" id="datepicker" placeholder="Chọn ngày tổ chức" />
      <button  class="w3-button w3-round w3-red w3-opacity w3-hover-opacity-off">book</button>
      </form>
  </div>
 </div>
<?php 
if(isset(Auth::user()->name)){
?>
@include('client.partials.navbaruslogin')
<?php
  }
  else {
?>
@include('client.partials.navbarus')
<?php } ?>  

</div>
</section>
</header> 

