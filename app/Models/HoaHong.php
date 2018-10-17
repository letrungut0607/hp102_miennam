<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NhanVien;
use App\Models\HopDong;

class HoaHong extends Model
{
  protected $table = 'hoahong';

  public function nhanvien()
  {
  	return $this->belongsTo(NhanVien::class);
  }

  public function hopdong()
  {
    return $this->belongsTo(HopDong::class);
  }
}
