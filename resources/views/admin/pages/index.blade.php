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
                <span>{{count($loaisp)}}</span>
                Loại Sản Phẩm
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
            <div class="sm-st-info">
                <span>{{ count($sanpham) }}</span>
                Sản Phẩm
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
            <div class="sm-st-info">
                <span>{{ count($blog) }}</span>
                Bài Viết
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
            <div class="sm-st-info">
                <span>4567</span>
                Đơn hàng
            </div>
        </div>
    </div>
</div>
</section>
</aside>
@stop