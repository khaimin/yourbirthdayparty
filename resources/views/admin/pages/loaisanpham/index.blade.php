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
                <span>{{count($data)}}</span>
                Loại Sản Phẩm
            </div>
        </div>
    </div>
 
<div class="right_col" role="main">    
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Loại Sản Phẩm</h2><br>
            <a href="{{route('admin.loaisanpham.create')}}" class="btn btn-app" style="float: right;">
              <i class="fa fa-edit"></i> Thêm mới
            </a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!-- start project list -->
            <table class="table table-striped projects">
              <thead>
                <tr class="btn-info">
                  <th style="width: 10%">#</th>
                  <th style="width: 20%">#Mã loại</th>
                  <th style="width: 25%">#Tên</th>
                  <th style="width: 20%">#Trạng thái</th>
                  <th style="width: 25%">#Thao tác</th>
                </tr>
              </thead>
              <tbody>
              @foreach($data as $data)
                <tr>
                  <td>{{ $data->idLoai }}</td>
                  <td>
                    <a>{{ $data->idLoai }}</a>
                    <br />
                    <small>Created {{ $data->created_at }}</small>
                  </td>
                  <td>
                      {{ $data->tenLoai }}
                  </td>
                  <td>
                    <code>0</code> hiển thị
                  </td>
                  <td>
                    <a href="" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                    <a href="{{ route('admin.loaisanpham.edit', $data->idLoai) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="{{ route('admin.loaisanpham.del', $data->idLoai) }}"  onclick="return confirm('Xóa dữ liệu?')" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i> Delete </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
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