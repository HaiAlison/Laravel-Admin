@extends('layout')
@section('main-content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($quanTriVien)) Cập nhật @else Thêm mới @endif quản trị viên</h4>
                                @if(isset($quanTriVien))
                                <form action="{{ route('quan-tri-vien.xu-ly-cap-nhat',['id' => $quanTriVien->id]) }}" method="POST" enctype="multipart/form-data">
                                @else
                                <form action="{{ route('quan-tri-vien.xu-ly-them-moi') }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                                        <input type="text" @if(isset($quanTriVien)) readonly @endif class="form-control" id="ten_dang_nhap" name="ten_dang_nhap"
                                        @if(isset($quanTriVien)) value="{{ $quanTriVien->ten_dang_nhap }}"
                                        @endif
                                        >
                                        @if(!isset($quanTriVien))
                                        <label for="mat_khau">Mật khẩu</label>
                                        <input type="text" @if(isset($quanTriVien)) readonly @endif class="form-control" id="mat_khau" name="mat_khau">
                                        @endif
                                        <label for="ho_ten">Họ tên</label>
                                        <input type="text" class="form-control" id="ho_ten" name="ho_ten"
                                        @if(isset($quanTriVien)) value="{{ $quanTriVien->ho_ten }}"
                                        @endif
                                        >
                                        <div class="form-group">
                                        <label for="anh_dai_dien">Hình đại diện</label>
                                        <input type="file" class="form-control" id="anh_dai_dien" name="anh_dai_dien"
                                        
                                        >
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                    @if(isset($quanTriVien)) Cập nhật @else Thêm @endif<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                                    </button>
                                    <a href="{{route('quan-tri-vien.danh-sach')}}" class="btn btn-warning waves-effect waves-light">
                                            Hủy<span class="btn-label-right"><i class="mdi mdi-close-circle-outline"></i></span>
                                    </a>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->
                </div>
@endsection