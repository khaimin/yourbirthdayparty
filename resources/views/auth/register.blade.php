<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">
=======
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{url('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
     <link href="{{url('public/admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
     <link href="{{url('public/admin/css/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{url('public/admin/css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
      <link href="{{url('public/admin/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
      <div class="container">
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('rule') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Quyền</label>

                            <div class="col-md-6">
                                <select name="rule">
                                    <option value=""></option>
<<<<<<< HEAD
                                    <option value="1">Admin</option>
                                    <option value="2">Nhân viên</option>
                                    <option value="3">Nhà cung cấp</option>
=======
                                    <option value="2">Đối tác</option>
                                    <option value="3">Khách hàng</option>
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
                                </select>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rule') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@stop
=======
  </body>
</html>
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
