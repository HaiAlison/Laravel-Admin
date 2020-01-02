@extends('layout')
@section('main-content')
<div class="row">
<!-- fix lỗi logic cho cái này -->
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-body col-lg-6">
                                <h4 class="mb-3 header-title">@if(isset($nguoiChoi)) Cập nhật @else Thêm mới @endif thông tin người chơi</h4></h4>
                                @if(isset($nguoiChoi))
                                <form action="{{ route('nguoi-choi.xu-ly-cap-nhat',['id' => $nguoiChoi->id]) }}" method="POST" enctype="multipart/form-data">
                                @else
                                <form action="{{ route('nguoi-choi.xu-ly-them-moi') }}" method="POST" enctype="multipart/form-data">
                                @endif 
                                    @csrf
                                     <!-- báo lỗi -->
                                     <div class="form-group">
                                        @if(count($errors)>0)
                                        <div class="alert alert-danger" id="thong_bao_6s">
                                        <ul >
                                            <li>{{$errors->first()}}</li>
                                        </ul>
                                        </div>
                                        @endif
                                    <div class="form-group">
                                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                                        <input type="text" @if(isset($nguoiChoi)) readonly @endif class="form-control" id="ten_dang_nhap" name="ten_dang_nhap"
                                       @if(isset($nguoiChoi)) value="{{ $nguoiChoi->ten_dang_nhap }}"@endif>
                                    </div>
                                    @if(!isset($nguoiChoi)) 
                                    <div class="form-group">
                                        <label for="mat_khau">Mật khẩu</label>
                                        <input type="text" class="form-control" id="mat_khau" name="mat_khau">
                                       <!-- @if(isset($nguoiChoi)) value="{{ $nguoiChoi->mat_khau }}"@endif> -->
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                       @if(isset($nguoiChoi)) value="{{ $nguoiChoi->email }}"@endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="hinh_dai_dien">Hình đại diện</label>
                                        <input type="file" class="form-control" id="hinh_dai_dien" name="hinh_dai_dien"
                                       @if(isset($nguoiChoi)) value="{{ $nguoiChoi->hinh_dai_dien }}"@endif>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="diem_cao_nhat">Điểm cao nhất</label>
                                        <input type="number" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat"
                                       @if(isset($nguoiChoi)) value="{{ $nguoiChoi->diem_cao_nhat }}"@endif>
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <label for="credit">Credit</label>
                                        <input type="number" class="form-control" id="credit" name="credit"
                                       @if(isset($nguoiChoi)) value="{{ $nguoiChoi->credit }}"@endif>
                                    </div> -->
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                    @if(isset($nguoiChoi)) Cập nhật @else Thêm @endif<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                                    </button>
                                    <a href="{{route('nguoi-choi.danh-sach')}}" class="btn btn-warning waves-effect waves-light">
                                            Hủy<span class="btn-label-right"><i class="mdi mdi-close-circle-outline"></i></span>
                                    </a>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->
                </div>
@endsection