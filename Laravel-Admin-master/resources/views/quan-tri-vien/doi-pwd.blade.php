@extends('layout')
@section('main-content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Đổi mật khẩu quản trị viên</h4>
                                <form action="{{ route('quan-tri-vien.xu-ly-doi-mat-khau',['id' => Auth::user()->id]) }}" method="POST">
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
                                        <input type="text" readonly class="form-control" id="ten_dang_nhap" name="ten_dang_nhap"
                                        value="{{Auth::user()->ten_dang_nhap}}">
                                        <label for="mat_khau">Mật khẩu</label>
                                        <input type="text" class="form-control" id="mat_khau" name="mat_khau">
                                        <label for="mat_khau_confirmation">Nhập lại mật khẩu</label>
                                        <input type="text" class="form-control" id="mat_khau_confirmation" name="mat_khau_confirmation">
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                    Xác nhận<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
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