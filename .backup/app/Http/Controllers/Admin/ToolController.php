<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Nhanviensanxuat;
use App\Http\Requests\DoiMatKhauRequest;
use DateTime;
use Hash;
use Auth;

class ToolController extends Controller
{
	public function postXoaBo(Request $request)
	{
		if(isset($request->del_dulieu) && intval($request->del_dulieu) > 0)
      {
      	$array_request = explode('_', $request->del_dulieu);
         $id = $array_request[0];
         $table = $array_request[1];
         $xuatkho = Xuatkho::find($id);
         $loi = $this->xoaDuLieu($table, $id);
         
         if($loi == 0)
         {
            return redirect()->back()->with('thongbao', 'Đã xóa vĩnh viễn');      
            
         }
         else{
            return redirect()->back()->with('thongbao', 'Không thể xóa được');          
         }
         
         
      }
	}

   private function xoaDuLieu($table, $id)
   {
   
   }
   public function getDoiMatKhau()
   {
      return view('admin.common.doimatkhau');
   }

   public function postDoiMatKhau(DoiMatKhauRequest $request)
  {
    $nhanvien = Nhanvien::find(Auth::user()->id);
    $password_old = $request->password_old;

    if (!Hash::check($password_old, Auth::user()->password)) {
      return chuyenhuong_loi('Mật khẩu cũ không khớp');
    }

    $nhanvien->password = Hash::make($request->password);
    $nhanvien->save();

    return thongbao_thanhcong('Đổi mật khẩu thành công');
  }
}
