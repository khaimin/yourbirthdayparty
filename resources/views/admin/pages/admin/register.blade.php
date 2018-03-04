 <!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta name="" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ url('public/admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <style type="text/css">
      #background {
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background: url(polina.jpg) no-repeat;
    background-size: cover;

}
.container h1 {
    color: gray;
    text-align: center;
    margin-top: 10px;
   
}
.container1{
    background-color: #EDEDED;
    margin-top: 30px;

    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}
    </style>
</head>
<body>
<div class="container" style="float: right;">

<div class="row" >
 <video autoplay loop muted poster="screenshot.jpg" id="background">
        <source src="../resources/upload/sanpham/abcd.mp4" type="video/mp4">

    </video>
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-6">
    <form  class=" container1" method="POST" enctype="multipart/form-data" >
     {{ csrf_field() }}
     <br>
          <h1>Tạo tài khoản</h1>
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
        <select name="status" class="form-control">
          <option value="0">Khách Hàng</option>
      
        </select>
      </div>
      <div class="form-group">
         @if($errors->has('fimage'))
                  <div class="alert alert-danger">
            {{$errors->first('fimage')}}
                </div>
                @endif
          <label class="btn btn-default btn-file">
            <input  type="file" name="fimage" value="{{ old('fimage') }}">
          </label>
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
      <a href="{{URL::route('register')}}">  <div class="col-xs-6 col-md-6"><input type="submit" value="Đăng kí" class="btn btn-success btn-block btn-lg"></div></a>
        <div class="col-xs-6 col-md-6"><a href="{{URL::route('login')}}" class="btn btn-primary btn-block btn-lg">Đăng nhập</a></div>
      </div>
    </form>
  </div>
</div>
</body>
</html>