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
      
          <div class="x_content">
            <!-- start project list -->
      

            <table class="table table-striped projects">
              <thead>
                <tr class="btn-info">
                 
                  <th style="width: 5%">#số hóa đơn</th>
                   <th style="width: 10%">#ngày hóa đơn</th>
                   <th style="width: 8%">#trangthai</th>
                  <th style="width: 10%">#ngày hóa đơn</th>
                   <th style="width: 10%">#tổng tiền</th>
                  
                  
                </tr>
              </thead>
              <tbody>
              @foreach($thongke as $thongke)
                <tr>
                  <td>
                  <span class="btn btn-info btn-xs">    {{ $thongke->sohd }}</span>
                  </td>
                  <td>
                      {{ $thongke->nghd }}
                  </td>
                   <td>
                      @if($thongke->trangthai==0)
                      <span class="btn btn-success btn-xs">Đã tiếp nhận</span>
                    @endif
                  </td>
                  <td>
                   {{ $thongke->ghichu }}
                  </td>
                   <td>
                      {{$thongke->tongtien}}
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