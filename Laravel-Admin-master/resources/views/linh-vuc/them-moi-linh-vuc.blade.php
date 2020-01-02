@extends('layout')
@section('main-content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($linhVuc)) Cập nhật @else Thêm mới @endif lĩnh vực</h4></h4>
                                @if(isset($linhVuc))
                                <form action="{{ route('linh-vuc.xu-ly-cap-nhat',['id' => $linhVuc->id]) }}" method="POST">
                                @else
                                <form action="{{ route('linh-vuc.xu-ly-them-moi') }}" method="POST">
                                @endif
                                    @csrf
                                    <!-- báo lỗi -->
                                    <div class="form-group">
                                        @if(count($errors)>0)
                                        <div class="alert alert-danger" id="thong_bao_6s">
                                        <ul >
                                            <!-- @foreach($errors->all() as $error )
                                                <li>{{$error}}</li>
                                            @endforeach -->
                                            <li>{{$errors->first()}}</li>
                                        </ul>
                                        </div>
                                        @endif
                                        <label for="ten_linh_vuc">Tên</label>
                                        <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc"
                                       @if(isset($linhVuc)) value="{{ $linhVuc->ten_linh_vuc }}"
                                       @endif
                                       >
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                    @if(isset($linhVuc)) Cập nhật @else Thêm @endif<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                                    </button>
                                    <a href="{{route('linh-vuc.danh-sach')}}" class="btn btn-warning waves-effect waves-light">
                                            Hủy<span class="btn-label-right"><i class="mdi mdi-close-circle-outline"></i></span>
                                    </a>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->
                </div>
@endsection
