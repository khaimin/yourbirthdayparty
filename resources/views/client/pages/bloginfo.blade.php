 @extends('client.master')
@section('head.title')
Cakes
@stop
@section('body.content')
 <div class="row pad1">
  <div class=" video">
  <video poster="#" id="bgvid" playsinline autoplay muted loop>
  <!-- -->
  <source src="resources/upload/sanpham/abcd.mp4" type="video/mp4">
  </video>
  </div>
 
  

  <div id="polina">
  <h3 class="text-center">Happy Simple</h3>
  <h6 class="text-center">Happy behind the click !!!!</h6>
  
</div>
</div>

<section class="content gallery pad1">
  <hr style="color: red">
 

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
    @foreach($data as $data)

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="{{asset('resources/upload/sanpham/'.$data->hinhanh)}}" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>{{$data->tieude}}</b></h3>
      <h5>{{$data->mota}}

<span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>{{$data->noidung}}</p>
      <div class="w3-row">
               <div class="w3-col m4 w3-hide-small">
          
        </div>
      </div>
    </div>
  </div>
   @endforeach
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
     @foreach($top4 as $top4)
    <a href="{{route('blog',['id'=>$top4->id])}}">
  <div class="w3-card-2 w3-margin w3-margin-top">
<div class="w3-container w3-padding">
      <h4>Bài viết mới nhất</h4>
    </div>
    <img src="{{asset('resources/upload/sanpham/'.$top4->hinhanh)}}" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>{{$top4->tieude}}</b></h4>
      <p>{{$top4->mota}}</p>
    </div>
  </div></a><hr>
   @endforeach
  <!-- Posts -->
  <div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
      <h4>Bài đăng gần đây</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
          @foreach($xemnhieu as $xemnhieu)
    <a href="{{route('blog',['id'=>$xemnhieu->id])}}">
      <li class="w3-padding-16">
        <img src="{{asset('resources/upload/sanpham/'.$xemnhieu->hinhanh)}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">{{$xemnhieu->tieude}}</span><br>
        <span>{{$xemnhieu->mota}}</span>
      </li> 
    </a>
      @endforeach
    </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Trang trí</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Thức ăn</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Hoa</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sảnh</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Tiệc sinh nhật</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Quà</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Bánh</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Thiệp</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Rượu</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Đồ uống</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Mời</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ảnh</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Âm Nhạc</span>
    </p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>
  </div>
</section>
