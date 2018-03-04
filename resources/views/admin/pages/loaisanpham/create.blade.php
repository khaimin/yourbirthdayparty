@extends('admin.master')
@section('head.title')
Admin
@stop
@section('body.content')
<aside class="right-side">

<!-- Main content -->
	<section class="content">
	<!-- page content -->
		              
        <div class="row">
          	<div class="col-md-6 col-md-offset-3">
            	<section class="panel">
              	<header class="panel-heading">
                  	THÊM LOẠI SẢN PHẨM
              	</header>
              	<div class="panel-body">
                  	<form role="form" action="{{ route('admin.loaisanpham.store') }}" method="POST">
                  	{{ csrf_field() }}
                      	<div class="form-group">
                      		@if($errors->has('txtidLoai'))
                                <p style="color:red">{{$errors->first('txtidLoai')}}</p>
                              @endif
                          	<label for="idLoai">Mã loại sản phẩm</label>
                          	<input type="text" name="txtidLoai" class="form-control" id="idLoai" placeholder="Mã loại sản phẩm" ">
                      	</div>
                      	<div class="form-group">
                      		@if($errors->has('txttenLoai'))
                                <p style="color:red">{{$errors->first('txttenLoai')}}</p>
                              @endif
                          	<label for="tenLoai">Tên loại sản phẩm</label>
                         	<input type="text" name="txttenLoai" class="form-control" id="tenLoai" placeholder="Tên loại sản phẩm">
                      	</div>
                      	<button class="btn btn-warning" type="reset">Reset</button>
                      	<button class="btn btn-info" type="submit">Submit</button>
						
                </form>
            </div>
        </section>
	</section><!-- /.content -->
<div class="abc" style="min-height: 280px;"></div>
<div class="footer-main">
Copyright &copy Director, 2014
</div>
</aside><!-- /.right-side -->
@stop