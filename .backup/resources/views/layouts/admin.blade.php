<!DOCTYPE html>
<html lang="en">
<head>
<title>Quản lý | @yield('title')</title>
<meta charset="UTF-8" />
<link rel="icon" href="{{ asset('css/img/logo-admin.png') }}" type="image/x-icon" />
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/admin/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/admin/uniform.css') }}" />
<link rel="stylesheet" href="{{ asset('css/admin/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/admin/matrix-media.css') }}" />
@yield('style')
<link rel="stylesheet" href="{{ asset('css/admin/font-awesome.css') }}"  />
<link rel="stylesheet" href="{{ asset('css/admin/jquery.gritter.css') }}" />
<link rel="stylesheet" href="{{ asset('css/admin/form-validation.css') }}"  type="text/css"/>
<link rel="stylesheet" href="{{ asset('css/admin/jquery-confirm.min.css') }}"  type="text/css"/>
<link rel="stylesheet" href="{{ asset('css/admin/select2.css') }}" type="text/css">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>
<body>
<div id="header">
  <h1><a href="{{ route('admin.dashboard') }}">HP102</a></h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Xin chào! {{ Auth::user()->tennhanvien }}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="{{ route('tool.doimatkhau') }}"><i class="icon-user"></i> Đổi mật khẩu</a></li>
        <li class="divider"></li>
        <li><a href="{{ route('admin.logout') }}"><i class="icon-key"></i> Đăng xuất</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text"> Thông báo</span> <span class="label label-important"></span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a title=""> Không có thông báo nào</a></li>
        <li class="divider"></li>
      </ul>
    </li>
    <li class=""><a title="Cài đặt thông tin" href=""><i class="icon icon-cog"></i> <span class="text">Cài đặt</span></a></li>
    <li class=""><a title="Đăng xuất" href="{{ route('admin.logout') }}"><i class="icon icon-share-alt"></i> <span class="text">Đăng xuất</span></a></li>
  </ul>
</div>
<div id="sidebar"><a href="{{ route('admin.dashboard') }}" class="visible-phone"><i class="icon icon-home"></i> Trang chủ</a>
  <ul class="sidebar-nav">
    <li class="mymenu">
      <a href="{{ route('admin.dashboard') }}"><i class="icon icon-home"></i> <span>Trang chủ</span></a> 
    </li>

    @if(Auth::user()->phanquyen === 1)

    <li class="mymenu"><a href="#"><i class="icon-shopping-cart"></i> <span>Thông tin cá nhân</span></a></li>
    <li class="mymenu"><a href="{{ route('nhanvien.index') }}"><i class="icon-shopping-cart"></i> <span>Quản lý nhân viên</span></a></li>
    @endif

    <li class="submenu mymenu"> 
      <a href="#"><i class="icon icon-th-list"></i> <span>Quản lý hợp đồng</span> &nbsp; <span class="badge badge-info">2 mục</span></a>
        <ul>
          
        </ul>
    </li>

    <li class="submenu mymenu"> 
      <a href="#"><i class="icon icon-th-list"></i> <span>Quản lý lương</span> &nbsp; <span class="badge badge-info">2 mục</span></a>
        <ul>
         
        </ul>
    </li>

    @if(Auth::user()->phanquyen === 1)

    <li class="submenu mymenu"> 
      <a href="#"><i class="icon icon-th-list"></i> <span>Quản lý rút tiền</span> &nbsp; <span class="badge badge-info">2 mục</span></a>
        <ul>
         
        </ul>
    </li>
    <li class="submenu mymenu"> 
      <a href="#"><i class="icon icon-th-list"></i> <span>Quản lý hoa hồng</span> &nbsp; <span class="badge badge-info">3 mục</span></a>
        <ul>
         
        </ul>
    </li>
    <li class="submenu mymenu"> 
      <a href="#"><i class="icon icon-th-list"></i> <span>Quản lý thống kê</span> &nbsp; <span class="badge badge-info">2 mục</span></a>
        <ul>
         
        </ul>
    </li>
     <li class="submenu mymenu"> 
      <a href="#"><i class="icon icon-th-list"></i> <span>Quản lý hệ thống</span> &nbsp; <span class="badge badge-info">2 mục</span></a>
        <ul>
          
        </ul>
    </li>
    @endif
    
  </ul>
</div>
@yield('content')
<input id="token_key" value="{{ csrf_token() }}" type="hidden">
<div class="row-fluid">
  <div id="footer" class="span12">&copy; {{ date('Y') }} </div>
</div>
<script src="{{ asset('js/admin/jquery.min.js') }}"></script> 
<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.gritter.min.js') }}"></script> 
<script src="{{ asset('js/admin/matrix.js') }}"></script>  
<script src="{{ asset('js/admin/jquery.number.js') }}"></script> 
<script src="{{ asset('js/admin/form-validator/jquery.form-validator.min.js') }}"></script> 
<script src="{{ asset('js/admin/jquery-confirm.min.js') }}"></script> 
<script src="{{ asset('js/admin/select2.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.uniform.js') }}"></script>
<script src="{{ asset('js/admin/manager.js') }}"></script> 

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
  window.addEventListener('touchstart', function(e) {
if (e.targetTouches.length === 2) {
e.preventDefault();
}
}, { passive: false } );

</script>
@yield('script')
</body>
</html>
