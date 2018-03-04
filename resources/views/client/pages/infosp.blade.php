 @extends('client.master')
@section('head.title')
Cakes
@stop
@section('body.content')


<section class="content gallery pad1">
  <hr style="color: red">
 

<!-- Grid -->
<div class="w3-row w3-padd">

<!-- Blog entries -->
 @if(Session::has('flash_message'))
                <div class="x_content bs-example-popovers">
                  <div style="text-align: center;color: red" class="alert alert-{!! Session::get('flash_level')!!} alert-dismissible fade in" role="alert">
                    
                    </button>
                    <strong > {!! Session::get('flash_message')!!}</strong>
                  </div>
                </div>
   @endif

  @foreach($data as $data)
  

<div class="w3-col l5 s12">
  <!-- Blog entry -->


  <div class="w3-card-4 w3-margin w3-white " >
      <h2 class="w3-text-green w3-col s12 w3-padding" style="text-align: center; letter-spacing: 2px; font-weight: 700">{{$data->tenSP}}
      </h2>
      <div class="w3-col s4 w3-margin">
         <h4 ><i class="fa orange fa-usd"><strong class="red"><span class="orange"> Giá:</span> {{$data->dongia}} VND</strong></i></h4>
      </div> 
      <div class="w3-col s5 w3-margin">
        <h4><i class="fa orange fa-heart"><strong class="red"><span class="orange"> Rating:
        <i class="fa red fa-star"></i>
        <i class="fa red fa-star"></i>
        <i class="fa black fa-star"></i>
        <i class="fa black fa-star"></i>
        <i class="fa black fa-star-half-o"></i>
        </span></strong></i></h4>
      </div> 
      <img src="{{asset('resources/upload/sanpham/'.$data->hinh)}}" style="width:100%;margin-bottom:-6px;" >
     
    
  </div>
 

 
 
<!-- END BLOG ENTRIES -->

<!-- Introduction menu -->

  <!-- Posts -->
  
   
</div>
<div class="w3-col l7">
  <!-- About Card -->
  <div class="w3-card-2 w3-margin w3-margin-top">
       <div class="w3-container w3-padding">
         <h4 class="w3-text-green" style="text-align: center; letter-spacing: 2px; font-weight: 700">THÔNG TIN SẢN PHẨM</h4>
       </div>
  </div>
  <div class="w3-card-2 w3-margin w3-margin-top">
       <div class="w3-container w3-padding">
         <h4  style="text-align: left;color: gray">{{$data->mota}}</h4>
       </div>
  </div>
    
 <div class="w3-row w3-large w3-margin">
      <div class="w3-col s5 content-thanhtoan ">
        <p class="textinfosp orange">Ưu đãi</p>
        <p class="textinfosp orange">Chất lượng</p>
        <p class="textinfosp orange">Số lượng</p>
      <a href="{{route('infosp',['id'=>$data->id])}}"> 
      <form role="form" action="" method="POST">
      {{ csrf_field() }}
       <button class="w3-button w3-green textinfosp "  >Đặt hàng</button></p> </a>
      </div>
      <div class="w3-col s5">
        <p style="color: green" class="textinfosp" >Mua 5 tặng 1</p>
        <p style="color: green" class="textinfosp">Đảm bảo 100%</p>
        <p> <input type="number" name="soluong" class="w3-border" value="0"></p> 

      </div>
     
       </form>
       <p>   <a href="{{route('donhang') }}"><button class="w3-button w3-orange w3-third textinfosp" >Thanh toán</button></a></p>
</div>
  @endforeach  




  
</div>

 

<!-- Grid -->
<div class="w3-row">
 <h2 class="w3-text-green w3-col s12 w3-padding">Các sản phẩm liên quan
      </h2>
@foreach($xemnhieu as $xemnhieu)
<div class="w3-col l3">
  <!-- About Card -->

  <div class="w3-card-2 w3-margin w3-margin-top">
       <div class="w3-container w3-padding">
        <a href="{{route('infosp',['id'=>$xemnhieu->id])}}"> <h4 class="w3-text-green" style="text-align: center;">{{$xemnhieu->tenSP}}</h4></a>
           <a href="{{route('infosp',['id'=>$xemnhieu->id])}}"> <img src="{{asset('resources/upload/sanpham/'.$xemnhieu->hinh)}}"  style="height: 200px;" ></a>
       </div>

  </div>
  <div class="w3-card-2 w3-margin w3-margin-top">
        <div class="w3-col s8 w3-margin">
         <h4><i class="fa orange fa-usd"><strong class="red"><span class="orange"> Giá:</span> {{$xemnhieu->dongia}} VND</strong></i></h4>
      </div> 
      <div class="w3-container w3-padding">
      <p class="textinfosp2">{{str_limit($xemnhieu->mota, $limit = 50, $end = '...')}}</p>
      </div>
  </div>
    
</div>
 @endforeach
</div>

 
</section>
