@extends('client.master')
@section('head.title')
Cakes
@stop
@section('body.content')
<section class="content gallery pad1"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>

  <div class="container w3-padd " margin-top="20px">
  @if(Session::has('flash_message'))
                <div class="x_content bs-example-popovers">
                  <div style="text-align: center;color: green" class="alert alert-{!! Session::get('flash_level')!!} alert-dismissible fade in" role="alert">
                 
                    
                    <strong > {!! Session::get('flash_message')!!}</strong>
                  </div>
                </div>
   @endif
    <div class="row">
<<<<<<< HEAD
    @foreach($data as $data)
      <div class="grid_4" style="padding-top: 30px;">
        <div class="gall_block">
          <div class="maxheight">
            <a href="{{route('infosp',['id'=>$data->id])}}" >
              <img src="{{asset('resources/upload/sanpham/'.$data->hinh)}}" width="370px" height="250px"  alt="">
            </a>
            <div class="gall_bot">
            <div class="text1"><a href="{{route('infosp',['id'=>$data->id])}}">{{ $data->tenSP }}</a></div>
            <p>{{str_limit($data->mota, $limit = 60, $end = '...')}}</p>
            <br>
            <a href="{{route('infosp',['id'=>$data->id])}}" class="btn">xem thêm</a>
            <a href="{{route('datsp',['id'=>$data->id])}}" class="btn">đặt hàng</a>
            </div> 
=======
    @foreach($data as $data1)
      <div class="grid_4" style="padding-top: 20px">
        <div class="gall_block">
          <div class="maxheight">
            <a href="" class="gall_item">
              <img src="{{asset('resources/upload/sanpham/'.$data1->hinh)}}" width="370px" height="250px"  alt="">
            </a>
            <div class="gall_bot">
            <div class="text1"><a href="#">{{ $data1->tenSP }}</a></div>
            <p>{{str_limit($data1->mota, $limit = 160, $end = '...')}}</p>
            <br>
            <a href="#" class="btn">xem thêm</a>
            <a href="#" class="btn">đặt hàng</a>
            </div>
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row center">
      {!! $data->render() !!}
    </div>
    
  </div>
<!-- Modal -->
@stop
<!-- Button HTML (to Trigger Modal) -->
<!-- Modal HTML -->

