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
            <h2>Bảng thành viên</h2><br>
            <a href="{{route('themnguoidung',['rule'=>0])}}" class="btn btn-app" style="float: right;">
              <i class="fa fa-edit"></i> Thêm mới
            </a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!-- start project list -->
      

            <table class="table table-striped projects">
              <thead>
                <tr class="btn-info">
                 
                  <th style="width: 7%">#</th>
                   <th style="width: 10%">#Tên người dùng</th>
                    <th style="width: 10%">#Địa chỉ email</th>
                   <th style="width: 10%">#avatar</th>
                   <th style="width: 8%">#Địa chỉ</th>
                  <th style="width: 10%">#Ngày tạo</th>
              
                  
                </tr>
              </thead>
              <tbody>
              @foreach($thongke as $thongke)
                <tr>
                  <td>
                  <span class="btn btn-info btn-xs"> #</span>
                  </td>
                  <td>
                      {{ $thongke->name }}
                  </td>
                   <td>
                      {{ $thongke->email }}
                  </td>
                   <td>
                      <img src="{{asset('resources/upload/avatar/'.$thongke->avatar)}}" width="80px" alt="">
                  </td>
                 
             
                  <td>
                   {{ $thongke->diachi }}
                  </td>
                   <td>
                      {{$thongke->created_at}}
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