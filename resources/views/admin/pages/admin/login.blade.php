
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

<div class="row " >
 <video autoplay loop muted poster="screenshot.jpg" id="background">
        <source src="../resources/upload/sanpham/abcd.mp4" type="video/mp4">

    </video>
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-6">
      <form class=" container1" action="{{route('login')}}" method="POST" role="form">
            {{ csrf_field() }}
     <br>
     
        <h1>Đăng nhập</h1>
 
         @if($errors->has('errorlogin'))
                <div class="alert alert-danger row">
              {{$errors->first('errorlogin')}}
                </div>
              @endif
          <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                @if($errors->has('email'))
                  <div class="alert alert-danger">
                 
                 {{$errors->first('email')}}
                </div>
                @endif
            </div>

            <div class="form-group">
                 <input type="password" name="password" class="form-control" placeholder="Password" />
               @if($errors->has('password'))
                  <div class="alert alert-danger">
                {{$errors->first('password')}}
                </div>
                @endif
            </div>  
      <hr class="colorgraph">
      <div class="row">
          <div class="col-xs-6 col-md-6">
             <input type="submit" value="Đăng nhập" class="btn btn-primary btn-block btn-lg ">
          </div>
          
            <a href="{{URL::route('register')}}">  <div class="col-xs-6 col-md-6"><input type="button" value="Đăng kí" class="btn gray btn-block btn-lg"></div></a>
        
          
        
      </div>
    </form>
     
  </div>
</div>
</body>
</html>