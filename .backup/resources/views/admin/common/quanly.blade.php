@extends('layouts.admin')
@section('title', 'Trang chủ')
@section('style')
<link rel="stylesheet" href="{{ asset('css/admin/bootstrap-datepicker.min.css') }}" type="text/css">
@endsection
@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="" class="tip-bottom"><i class="icon-home"></i> Xin chào bạn đến với hệ thống quản lý</a></div>
    
  </div>
  
<!--End-breadcrumbs-->
  <div class="container-fluid">   
    <div class="row-fluid"  style="margin-top: 5px;">
      
      @if(Auth::user()->phanquyen === 0)
      <div class="alert alert-info alert-block">
      <h4 class="alert-heading">Xin chào bạn! {{ Auth::user()->tennhanvien }}</h4>
      </div>
      @endif
        <table class="table table-bordered"> 
          <tr class="topstats">
            <td class="topstats title">
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                  <span class="topstats title"><i class="fa fa-user"></i> Số Dư</span>
                  
                </div>
            </td>
            <td class="topstats title">
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                  <span class="topstats title"><i class="fa fa-user"></i> Hoa Hồng Tạm Tính</span>
                
                </div>
            </td>
            <td class="topstats title">
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                  <span class="topstats title"><i class="fa fa-user"></i> Số Hợp Đồng Trong Tháng</span>
                  
                </div>
            </td>
            <td class="topstats title">
              <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                  <span class="topstats title"><i class="fa fa-user"></i>  Tổng Số Người Dùng</span>
                  <
                </div>
            </td>
          </tr>
        </table>
      @if(Auth::user()->phanquyen === 1)
      <div class="alert alert-info alert-block">
        <h4 class="alert-heading">Danh sách giao dịch gần nhất</h4>
      </div>
      <table class="table table-bordered data-table">
        <thead>
          <tr>
            <th>Mã giao dịch</th>
            <th>Nội dung giao dịch</th>
            <th>Số tiền giao dịch</th>
            <th>Chứng từ kèm theo</th>
            <th>Ngày giao dịch</th>
            <th>Công cụ</th>
          </tr>
        </thead>
        <tbody>
      
        </tbody>
      </table>

      <div class="alert alert-info alert-block">
        <h4 class="alert-heading">Lịch sử rút tiền</h4>
      </div>
      <table class="table table-bordered data-table">
        <thead>
          <tr>
            <th>Tên sản phẩm</th>
            <th>Số dây/thùng</th>
            <th>Số gói/dây</th>
            <th>Số lượng gói tồn</th>
            <th>Số lượng thùng tồn</th>
          </tr>
        </thead>
        <tbody>
      
        </tbody>
      </table>

       <div class="alert alert-info alert-block">
        <h4 class="alert-heading"></h4>
      </div>
      @endif

    </div>
  </div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/admin/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/admin/bootstrap-datepicker.vi.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.peity.min.js') }}"></script>

<script>
  $(".bar-list").peity("bar");
</script>
@endsection