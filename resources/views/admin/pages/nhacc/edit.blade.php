@extends('admin.master')
@section('head.title')
Admin
@stop
@section('head.css')

@stop
@section('body.content')
<aside class="right-side">
<section class="content">
  <!-- page content -->
   <div class="row" style="margin-bottom:5px;">
 
  <div class="col-md-4">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
            <div class="sm-st-info">
                Cập Nhật Nhà Cung Cấp
            </div>
        </div>
    </div>
    <div class="col-md-6 ">
      <section class="panel">
        <div class="panel-body">
        @foreach($data as $data)
          <form action="{{ route('admin.nhacc.updatedata', $data->id) }}"  class=" container1" method="POST" enctype="multipart/form-data" >
           {{ csrf_field() }}
            <div class="checkbox">
                <label style="color: red"><input type="checkbox" name="txtstatus" value="2">Cập nhật trạng thái</label>
              </div>
              <br>
              <button class="btn btn-info" type="submit">Duyệt</button>
          </form>
          @endforeach
        </div>
      </section>
    </div>
  </div>
  </section><!-- /.content -->
  
<div class="abc" style="min-height: 280px;"></div>
<div class="footer-main">
Copyright &copy Director, 2014
</div>
</aside><!-- /.right-side -->
@stop
@section('body.js')

@stop