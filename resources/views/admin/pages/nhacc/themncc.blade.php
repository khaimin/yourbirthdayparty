@extends('admin.master')
@section('head.title')
Admin
@stop
@section('body.content')
<aside class="right-side">

<!-- Main content -->
<section class="content">


<div class="row" style="margin-bottom:5px;">

    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
            <div class="sm-st-info">
                <span>{{$sohoadon}}</span>
               Số lượng đơn hàng
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
            <div class="sm-st-info">
                <span>{{$tipnhan}}</span>
               Đã tiếp nhận
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
            <div class="sm-st-info">
                <span>{{$xuly}}</span>
                Đã xử lý
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
            <div class="sm-st-info">
                <span>{{$doanhthu}}</span>
               Doanh thu tháng
            </div>
        </div>
    </div>
</div>


<div class="right_col" role="main">    
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tạo tài khoản người dùng</h2><br>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!-- start project list -->
      

<div class="row" >
 
   
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-3 col-md-offset-3">
    <form  class=" container1" method="POST" enctype="multipart/form-data" >
     {{ csrf_field() }}
     <br>
     
      <hr class="colorgraph">
            <div class="form-group">
                @if($errors->has('hotten'))
                  <div class="alert alert-danger">
               {{$errors->first('hotten')}}
                </div>
                @endif
          <input type="text" name="hotten" id="hotten" class="form-control input-lg" placeholder="Họ và tên">
      </div>

          <div class="form-group">
           @if($errors->has('email'))
                  <div class="alert alert-danger">
              {{$errors->first('email')}}
                </div>
                @endif
                <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Địa chỉ email">
          </div>

      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
          @if($errors->has('password'))
                  <div class="alert alert-danger">
              {{$errors->first('password')}}
                </div>
                @endif
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mật khẩu">
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
           @if($errors->has('password_confirmation'))
                  <div class="alert alert-danger">
              {{$errors->first('password_confirmation')}}
                </div>
                @endif
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Nhập lại mật khẩu">
          </div>
        </div>
      </div>

      <div class="form-group">
      <select name="txtidLoai" class="form-control" id="idLoai">
    
                            @foreach($data as $data)
                                <option value="{{ $data->idLoai }}">{{ $data->tenLoai }}</option>
                            @endforeach
       </select>
      </div>
      <div class="form-group">
         @if($errors->has('fimage'))
                  <div class="alert alert-danger">
            {{$errors->first('fimage')}}
                </div>
                @endif
         <code>Hãy chọn ảnh với kích thước 370 x 230 pixel</code>
                                @if($errors->has('ficon'))
                                <p style="color:red">{{$errors->first('ficon')}}</p>
                                @endif
                                <input  type="file" name="fimage" value="{{ old('fimage') }}">
          </div>
        

       <div class="form-group">
           @if($errors->has('diachi'))
                  <div class="alert alert-danger">
              {{$errors->first('diachi')}}
                </div>
                @endif
        <input type="text" name="diachi" id="diachi" class="form-control input-lg" placeholder="Địa chỉ">
      </div>
            
      <hr class="colorgraph">
      <div class="row">
    <div class="col-xs-6 col-md-6"><input type="submit" value="Đăng kí" class="btn btn-success btn-block btn-lg"></div>
       
      </div>
    </form>
  </div>
            <!-- end project list -->
          </div>
        </div>
      </div>
    </div>
</div>
</section><!-- /.content -->
<div class="abc" style="height: 50px;"></div>
<div class="footer-main">
Copyright &copy Director, 2014
</div>
</aside><!-- /.right-side -->
@stop