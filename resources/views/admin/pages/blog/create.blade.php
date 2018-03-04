@extends('admin.master')
@section('head.title')
Admin
@stop
@section('head.css')
<script src="{{ url('public/admin/js/ckeditor/ckeditor.js')}}"></script>
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
                    THÊM TIN TỨC
                </header>
                <div class="panel-body">
                    <form role="form" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data"  method="POST">
                    {{ csrf_field() }}

                        <div class="form-group">
                          @if($errors->has('idTin'))
                                <p style="color:red">{{$errors->first('idTin')}}</p>
                              @endif
                            <label for="idTin">Tiêu đề</label>
                            <input type="text" name="idTin" class="form-control" id="idTin" placeholder="idTin" ">
                        </div>
                          <div class="form-group">
                          @if($errors->has('tieude'))
                                <p style="color:red">{{$errors->first('tieude')}}</p>
                              @endif
                            <label for="tieude">Tiêu đề</label>
                            <input type="text" name="tieude" class="form-control" id="tieude" placeholder="Tiêu đề" ">
                        </div>
                         <div class="form-group">
                          @if($errors->has('title'))
                                <p style="color:red">{{$errors->first('title')}}</p>
                              @endif
                            <label for="mota">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                        </div>
                         <div class="form-group">
                          @if($errors->has('mota'))
                                <p style="color:red">{{$errors->first('mota')}}</p>
                              @endif
                            <label for="mota">Mô tả</label>
                            <textarea name="mota" class="form-control" id="mota" placeholder="Mô tả"></textarea>
                        </div>
                        <div class="row">
                        <div class="form-group">
                          <label class="col-md-3 col-sm-3 col-xs-12">Avatar<span class="required">*</span></label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <code>Hãy chọn ảnh với kích thước 800 x 530 pixel</code>
                                @if($errors->has('hinhanh'))
                                  <p style="color:red">{{$errors->first('hinhanh')}}</p>
                                @endif
                                  <input  type="file" name="hinhanh">
                          </div>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                         <div class="form-group">
                          @if($errors->has('noidung'))
                                <p style="color:red">{{$errors->first('noidung')}}</p>
                              @endif
                            <label for="noidung">Nội dung</label>
                            <textarea name="noidung" class="form-control" id="noidung" rows="40"></textarea>
                            <script type="text/javascript">ckeditor("noidung");</script>
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