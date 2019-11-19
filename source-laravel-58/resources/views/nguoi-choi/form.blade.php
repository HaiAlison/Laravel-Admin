@extends('layout')


@section('main-content')
     <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($nguoiChoi)) Cập nhật @else Thêm @endif người chơi</h4>
                                @if(isset($nguoiChoi))
                                <form action="{{route('nguoi-choi.xu-ly-cap-nhat',['id'=>$nguoiChoi->id]) }}" method="POST">
                                @else
                                <form action="{{ route('nguoi-choi.xu-ly-them-moi')}}" method="POST">
                                @endif
                                    @csrf
                                    <div class="form-group">
                                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap"  @if(isset($nguoiChoi))
                                        disabled="true"
                                        value="{{ $nguoiChoi->ten_dang_nhap }}"
                                        @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="mat_khau">Mật khẩu</label>
                                        <input type="password" class="form-control" id="mat_khau" name="mat_khau"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="text" class="form-control" id="email" name="email" @if(isset($nguoiChoi))
                                        disabled="true"
                                        value="{{ $nguoiChoi->email }}"
                                        @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="hinh_dai_dien">Hình đại diện</label>
                                        <input type="text" class="form-control" id="hinh_dai_dien" name="hinh_dai_dien" @if(isset($nguoiChoi))
                                        value="{{ $nguoiChoi->hinh_dai_dien }}"
                                        @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="diem_cao_nhat">Điểm cao nhất</label>
                                        <input type="text" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat" @if(isset($nguoiChoi))
                                        value="{{ $nguoiChoi->diem_cao_nhat }}"
                                        @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="credit">Credit</label>
                                        <input type="text" class="form-control" id="credit" name="credit" @if(isset($nguoiChoi))
                                        value="{{$nguoiChoi->credit }}"
                                        @endif>
                                    </div>                                   
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->
        </div>
                 
@endsection