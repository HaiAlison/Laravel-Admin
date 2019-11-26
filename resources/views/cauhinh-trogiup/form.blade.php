@extends('layout')
@section('main-content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-body col-lg-6">
                                <h4 class="mb-3 header-title">@if(isset($cauHinh)) Cập nhật @else Thêm mới @endif trợ giúp</h4>
                                @if(isset($cauHinh))
                                <form action="{{ route('cau-hinh-app.xu-ly-cap-nhat',['id' => $cauHinh->id]) }}" method="POST">
                                @else
                                <form action="{{ route('cau-hinh-app.xu-ly-them-moi') }}" method="POST">
                                @endif
                                    @csrf
                                     <!-- báo lỗi -->
                                     @if(count($errors)>0)
                                        <div class="alert alert-danger" id="thong_bao_6s">
                                        <ul >
                                        <li>{{$errors->first()}}</li>
                                        </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="loai_tro_giup">Loại trợ giúp</label>

                                        <input type="text" class="form-control" id="loai_tro_giup" name="loai_tro_giup"
                                       @if(isset($cauHinh)) value="{{ $cauHinh->loai_tro_giup }}"@endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="thu_tu">Thứ tự</label>

                                        <input type="text" class="form-control" id="thu_tu" name="thu_tu"
                                       @if(isset($cauHinh)) value="{{ $cauHinh->thu_tu }}"@endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="credit">Credit</label>
                                        <input type="text" class="form-control" id="credit" name="credit"
                                       @if(isset($cauHinh)) value="{{ $cauHinh->credit }}"@endif>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                    @if(isset($cauHinh)) Cập nhật @else Thêm @endif<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                                    </button>
                                    <a href="{{route('cau-hinh-tro-giup.danh-sach')}}" class="btn btn-warning waves-effect waves-light">
                                            Hủy<span class="btn-label-right"><i class="mdi mdi-close-circle-outline"></i></span>
                                    </a>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->
                </div>
@endsection