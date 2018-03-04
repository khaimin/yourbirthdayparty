@extends('admin.master')
@section('head.title')
Admin
@stop
@section('body.content')
<aside class="right-side">


<div class="container" style="padding-top: 60px;">
 @if(Session::has('flash_message'))
                <div class="x_content bs-example-popovers">
                  <div class="alert alert-{!! Session::get('flash_level')!!} alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong> {!! Session::get('flash_message')!!}</strong>
                  </div>
                </div>
   @endif
  <h1 class="page-header"> Thông tin tài khoản</h1>
  <div class="row">
  	<form role="form" class="form-horizontal" enctype="multipart/form-data" action="{{route('admin.infoadmin.change')}}" method="POST">
                  	{{ csrf_field() }}
    <!-- left column -->
     <div class="col-md-1">
     </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="{{asset('resources/upload/avatar/'.Auth::user()->avatar)}}" class=" img-circle" alt="avatar">
        <h6>Upload a different photo...</h6>
       
         <input type="file" name="fimage"  class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <!-- <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        This is an <strong>.alert</strong>. Use this to show important messages to the user.
      </div> -->
    
       
           <div class="form-group">
          <label class="col-lg-3 control-label">Cửa hàng:</label>
          <div class="col-lg-8">
            <input class="form-control" name="name" value="{{Auth::user()->name}}" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email đăng nhập:</label>
          <div class="col-lg-8">
            <input class="form-control" name="email" value="{{Auth::user()->email}}" disabled type="email">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Địa chỉ:</label>
          <div class="col-lg-8">
            <input class="form-control" name="diachi" value="{{Auth::user()->diachi}}" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Ngày tạo:</label>
          <div class="col-md-8 ">
            <input class="form-control" name="created_at" disabled value="{{Auth::user()->created_at->format('d/m/Y')}}" type="text">
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-4 col-md-offset-8"">
         <a href="{{ URL::route('admin.infoadmin.index',['changes'=>1]) }}">  <input class="btn btn-warning" value="Changes password" type="button"></a>
		</div>
        </div>
      

           <?php
       if(isset($password))
       {
       	echo '        
       	<div class="form-group">
          <label class="col-lg-3 control-label">Mật khẩu cũ:</label>
          <div class="col-lg-8">
            <input name="password_old" class="form-control" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Mật khẩu mới:</label>
          <div class="col-lg-8">
            <input name="password_new" class="form-control" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Nhập lại mật khẩu:</label>
          <div class="col-lg-8">
            <input name="re_password_new"" class="form-control" type="password">
          </div>
        </div>
        ';

       }
       ?>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            	
          <button class="btn btn-info" type="submit">Submit</button>
          </div>
        </div>
        </form>
    </div>
  </div>
</div>
</aside><!-- /.right-side -->
@stop