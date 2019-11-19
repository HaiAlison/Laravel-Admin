@extends('layout')


@section('main-content')
     <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">@if(isset($linhVuc)) Cập nhật @else Thêm @endif lĩnh vực</h4>
                                @if(isset($linhVuc))
                                <form action="{{route('linh-vuc.xu-ly-cap-nhat',['id'=>$linhVuc->id]) }}" method="POST">
                                @else
                                <form action="{{ route('linh-vuc.xu-ly-them-moi')}}" method="POST">
                                @endif
                                    @csrf
                                    <div class="form-group">
                                        @if(count($errors)>0)
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                        @endif
                                        <label for="ten_linh_vuc">Tên lĩnh vực</label>
                                        <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" @if(isset($linhVuc))
                                        value="{{ $linhVuc->ten_linh_vuc }}"
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