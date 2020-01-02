@extends('layout')
@section('main-content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-body col-lg-6">
                                <h4 class="mb-3 header-title">@if(isset($cauHoi)) Cập nhật @else Thêm mới @endif câu hỏi</h4></h4>
                                @if(isset($cauHoi))
                                <form action="{{ route('cau-hoi.xu-ly-cap-nhat',['id' => $cauHoi->id]) }}" method="POST">
                                @else
                                <form action="{{ route('cau-hoi.xu-ly-them-moi') }}" method="POST">
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
                                        <label for="noi_dung">Nội dung</label>
                                        <input type="text" class="form-control" id="noi_dung" name="noi_dung"
                                       @if(isset($cauHoi)) value="{{ $cauHoi->noi_dung }}"@endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="linh_vuc">Lĩnh vực</label>
                                        <select class="custom-select " id="linh_vuc" name="linh_vuc">
                                            <option selected="" selected disible hidden >Chọn lĩnh vực</option>
                                            @if(isset($cauHoi))
                                            @foreach($listLinhVuc as $linhVuc)
                                            <option @if($linhVuc->id == $cauHoi->linh_vuc_id) selected @endif value="{{ $linhVuc->id }}">{{ $linhVuc->ten_linh_vuc }}</option>
                                            @endforeach
                                            @else
                                            @foreach($listLinhVuc as $linhVuc)
                                            <option value="{{ $linhVuc->id }}">{{ $linhVuc->ten_linh_vuc }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phuong_an_a">Phương án A</label>
                                        <input type="text" class="form-control" id="phuong_an_a" name="phuong_an_a"
                                       @if(isset($cauHoi)) value="{{ $cauHoi->phuong_an_a }}"@endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="phuong_an_b">Phương án B</label>
                                        <input type="text" class="form-control" id="phuong_an_b" name="phuong_an_b"
                                       @if(isset($cauHoi)) value="{{ $cauHoi->phuong_an_b }}"@endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="phuong_an_c">Phương án C</label>
                                        <input type="text" class="form-control" id="phuong_an_c" name="phuong_an_c"
                                       @if(isset($cauHoi)) value="{{ $cauHoi->phuong_an_c }}"@endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="phuong_an_d">Phương án D</label>
                                        <input type="text" class="form-control" id="phuong_an_d" name="phuong_an_d"
                                       @if(isset($cauHoi)) value="{{ $cauHoi->phuong_an_d }}"@endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="dap_an">Đáp án</label>
                                        <input style="text-transform: uppercase;" type="text" class="form-control" id="dap_an" name="dap_an"
                                       @if(isset($cauHoi)) value="{{ $cauHoi->dap_an }}"@endif>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                    @if(isset($cauHoi)) Cập nhật @else Thêm @endif<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                                    </button>
                                    <a href="{{route('cau-hoi.danh-sach')}}" class="btn btn-warning waves-effect waves-light">
                                            Hủy<span class="btn-label-right"><i class="mdi mdi-close-circle-outline"></i></span>
                                    </a>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->
                </div>
@endsection