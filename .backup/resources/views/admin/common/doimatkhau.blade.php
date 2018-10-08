@extends('layouts.admin')
@section('title', 'Đổi mật khẩu')
@section('content')
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{ route('admin.dashboard') }}" title="Trang chủ" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="#" class="current">Đổi mật khẩu</a> </div>
  <h1>Đổi mật khẩu</h1>
</div>
<div class="container-fluid">
 @include('partials.alert-info')
 <form action="{{ route('tool.doimatkhau') }}" method="post" class="form-horizontal">
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Thông tin mật khẩu</h5>
        </div>
        <div class="widget-content nopadding">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
          <div class="control-group">
            <label class="control-label">Mật khẩu cũ:</label>
            <div class="controls">
              <input type="password" name="password_old" class="span11" value="" data-validation="length" data-validation-length="min4" data-validation-error-msg-length="Vui lòng nhập mật khẩu cũ từ 4 ký tự">
              <span class="help-block form-error">{{ $errors->first('password_old') }}</span>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Mật khẩu mới:</label>
            <div class="controls">
              <input type="password" name="password" class="span11" value="" data-validation="length" data-validation-length="min4" data-validation-error-msg-length="Vui lòng nhập mật khẩu mới từ 4 ký tự">
              <span class="help-block form-error">{{ $errors->first('password') }}</span>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Nhập lại mật khẩu:</label>
            <div class="controls">
              <input type="password" name="repassword" class="span11" value="" data-validation="confirmation" data-validation-confirm="password" data-validation-error-msg="Mật khẩu mới lập lại không khớp">
              <span class="help-block form-error">{{ $errors->first('repassword') }}</span>
            </div>
          </div>

        </div>
      </div>
    </div>
    <center>
      <button type="submit" class="btn btn-success">Lưu lại</button>
      <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Quay lại</a>
    </center>
  </div>
  </form>
</div>
</div>
@endsection