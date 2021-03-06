@extends('back.layouts.app')
@section('styles')
@endsection
@section('scripts')
@endsection
@section('content')
<div class="container-fluid">
 <div class="row">
    <div class="col-md-12">
       <div class="card card-body printableArea">
          <h3><b>Chi tiết doanh thu</b> <span class="pull-right"></span></h3>
          <hr>
          <div class="row">
             <div class="col-md-12">
                <div class="pull-left">
                   <address>
                      <h3><b class="text-danger">Người chốt: {{ $doanhthu->nguoichot->tennhanvien }} #{{ $doanhthu->nguoichot->manhanvien }}</b></h3>
                      <p class="text-muted">
                        <b>Số doanh thu:</b> {{ $doanhthu->maso }}<br>
                        <b>Ngày chốt:</b> {{ formatDateTimeData($doanhthu->ngaychot) }}<br>
                        <b>Tổng tiền:</b> {{ formatMoneyData($doanhthu->sotien) }}<br>
                        <b>Số lần in:</b> {{ formatMoneyData($doanhthu->solanin) }}
                      </p>
                   </address>
                </div>
             </div>
             <div class="col-md-12">
                <div class="table-responsive m-t-10" style="clear: both;">
                   <table class="table table-hover">
                      <thead>
                        <tr>
                          <td colspan="4" class="nowrap">Bảng chi tiết chốt doanh thu</td>
                        </tr>
                         <tr>
                            <th class="nowrap">#</th>
                            <th class="nowrap">Mã nhân viên</th>
                            <th class="nowrap">Tên nhân viên</th>
                            <th class="nowrap" class="text-right">Số tiền</th>
                         </tr>
                      </thead>
                      <tbody>
                        @php
                        $tongtien = 0;
                        @endphp
                      @foreach ($doanhthu->chitietdoanhthu as $chitietdoanhthu)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $chitietdoanhthu->nhanvien->manhanvien }}</td>
                          <td>{{ $chitietdoanhthu->nhanvien->tennhanvien }}</td>
                          <td class="text-right">{{ formatMoneyData($chitietdoanhthu->sotien) }}</td>
                        @php
                        $tongtien += $chitietdoanhthu->sotien;
                        @endphp
                        </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="3">Tổng tiền</td>
                          <td class="text-right">{{  formatMoneyData($tongtien) }}</td>
                        </tr>
                      </tfoot>
                   </table>
                </div>
             </div>
             <div class="col-md-12">
                <hr>
                <div class="text-right">
                 <a class="btn btn-secondary" href="{{ route('admin.doanhthu.index') }}">Quay lại</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
@endsection