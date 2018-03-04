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
                    Sửa tin tức
                   
                </header>
                <div class="panel-body">
                    <form role="form" action="{{ route('admin.blog.update', $data->idTin) }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="tieude">Tiêu đề</label>
                            <input type="text" name="tieude" class="form-control" id="tieude" value="{{ $data->tieude }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ $data->title }}">
                        </div>
                        <div class="form-group">
                          <label for="mota">Mô tả</label>
                          <textarea name="mota" class="form-control" id="mota" placeholder="Mô tả"><?php echo $data->mota?></textarea>
                        </div>

                          <div class="form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12">Avatar<span class="required">*</span></label>
                            <img src="{{asset('resources/upload/sanpham/'.$data->hinhanh)}}" width="150px" alt="">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input  type="file" name="hinhanh" value="{{ $data->hinhanh }}">
                            </div>
                          </div>

                        <div class="form-group">
                            <label for="noidung">Nội dung</label>
                            <textarea name="noidung" class="form-control" id="noidung" rows="30" required="required"><?php echo $data->noidung?></textarea>
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