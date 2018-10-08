<?php

if(!function_exists('dinh_dang_ngay'))
{
	function dinh_dang_ngay($ngaythangnam)
	{
		return date('d-m-Y', strtotime($ngaythangnam));
	}
}

if(!function_exists('dinh_dang_so'))
{
	function dinh_dang_so($so)
	{
		return str_replace(',', '.', $so);
	}
}

if(!function_exists('chuyenhuong_loi'))
{
	function chuyenhuong_loi($err)
	{
		return redirect()->back()
         ->with('thongbao', $err)
         ->with('danger', 'true')
         ->withInput();
	}
}

if(!function_exists('thongbao_thanhcong'))
{
	function thongbao_thanhcong($msg)
	{
		return redirect()->back()
         ->with('thongbao', $msg);
	}
}

if(!function_exists('dinh_dang_ngay_gio'))
{
	function dinh_dang_ngay_gio($ngaythangnam)
	{
		return date('Y-m-d | H:i:s', strtotime($ngaythangnam));
	}
}

if(!function_exists('dinh_dang_ngay_mysql'))
{
	function dinh_dang_ngay_mysql($ngaythangnam)
	{
		return date('Y-m-d', strtotime($ngaythangnam));
	}
}

if(!function_exists('dinh_dang_ngay_gio_mysql'))
{
	function dinh_dang_ngay_gio_mysql($ngaythangnam)
	{
		return date('Y-m-d H:i:s', strtotime($ngaythangnam));
	}
}

if(!function_exists('kiemtra_admin'))
{
	function kiemtra_admin()
	{
		return Auth::user()->phanquyen === 1;
	}
}