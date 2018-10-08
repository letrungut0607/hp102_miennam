<?php

Route::get('/', function () {
   return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin\Auth'], function () {

   Route::get('/', 'XacThucController@getDangNhap')->name('admin.login');
   Route::get('login', 'XacThucController@getDangNhap')->name('admin.login.page');
   Route::post('login', 'XacThucController@postDangNhap')->name('admin.login.page');
   Route::get('logout', 'XacThucController@getDangXuat')->name('admin.logout');

});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['nhanvien', 'checkquantri']], function () 
{
	Route::group(['prefix' => 'info'], function(){
		Route::get('/', 'NhapKhoController@getIndex')->name('info.index');
	});

	Route::group(['prefix' => 'nhan-vien'], function(){
		Route::get('/', 'NhanVienController@getIndex')->name('nhanvien.index');
		Route::get('them-moi', 'NhanVienController@getThem')->name('nhanvien.them');
		Route::post('them-moi', 'NhanVienController@postThem')->name('nhanvien.them');
		Route::get('chinh-sua/{id}', 'NhanVienController@getSua')->name('nhanvien.sua');
		Route::post('chinh-sua/{id}', 'NhanVienController@postSua')->name('nhanvien.sua');
	});

	Route::group(['prefix' => 'thong-ke'], function(){
		
	});


	Route::get('lich-su-rut-tien', 'TienVonController@getLichSuRutTien')->name('tienvon.lichsu');

	Route::group(['prefix' => 'tool'], function(){
		Route::get('doi-mat-khau', 'ToolController@getDoiMatKhau')->name('tool.doimatkhau');
		Route::post('doi-mat-khau', 'ToolController@postDoiMatKhau')->name('tool.doimatkhau');
	});

});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'nhanvien'], function () 
{
	Route::get('/dashboard', 'QuanLyController@getQuanLy')->name('admin.dashboard');


});