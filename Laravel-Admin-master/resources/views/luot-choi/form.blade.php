@extends('layout')
@section('main-content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="mb-3 header-title">@if(isset($luotChoi)) Cập nhật lượt chơi @endif</h4></h4>
                                <form action="{{ route('luot-choi.xu-ly-cap-nhat',['id' => $luotChoi->id]) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        @if(count($errors)>0)
                                        <div class="alert alert-danger" id="thong_bao_6s">
                                        <ul >
                                            <li>{{$errors->first()}}</li>
                                        </ul>
                                        </div>
                                        @endif
                                      
                                       <label for="nguoi_choi_tdn">Tên ingame</label>
                                        <input type="text" readonly class="form-control" id="nguoi_choi_tdn" name="nguoi_choi_tdn"
                                        @foreach($listNguoiChoi as $nguoiChoi)
                                                @if($luotChoi->nguoi_choi_id == $nguoiChoi->id)

                                                value="{{ $nguoiChoi->ten_dang_nhap }}"
                                                @break
                                                @endif
                                                @endforeach
                                        />
                                       <label for="so_cau">Số câu</label>
                                        <input type="text" class="form-control" id="so_cau" name="so_cau" value="@if(isset($luotChoi)){{ $luotChoi->so_cau }}@endif">
                                       <label for="diem">Điểm</label>
                                        <input type="text" class="form-control" id="diem" name="diem" value="@if(isset($luotChoi)){{ $luotChoi->diem }}@endif">
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                    Cập nhật<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                                    </button>
                                    <a href="{{route('luot-choi.danh-sach')}}" class="btn btn-warning waves-effect waves-light">
                                            Hủy<span class="btn-label-right"><i class="mdi mdi-close-circle-outline"></i></span>
                                    </a>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->
                </div>
@endsection