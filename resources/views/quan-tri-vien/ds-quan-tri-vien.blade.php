@extends('layout')
@section('css')
        <!-- third party css -->
        <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
@endsection
@section('main-content')
        
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách quản trị viên @if(isset($listQuanTriVienRestore)) đã xóa @endif</h4>
                                @if(!isset($listQuanTriVienRestore))
                                <div style="display:flex;justify-content: center;align-items:center;">
                                    <a style="margin-bottom:10px" href="{{ route('quan-tri-vien.them-moi') }}" class="btn btn-info btn-rounded waves-effect waves-light">
                                                <span class="btn-label">
                                                <i class=" fas fa-plus">
                                                </i>
                                                </span>Thêm mới<i>
                                                </i>
                                    </a>
                                    <a style="margin-bottom:10px;margin-left:10px" href="{{ route('quan-tri-vien.restore') }}" class="btn btn-success btn-rounded waves-effect waves-light">
                                            <span class="btn-label">
                                            <i class="mdi mdi-restore">
                                            </i>
                                            </span>Phục hồi<i>
                                            </i>
                                </a>
                                </div>
                                @else
                                <a style="margin-bottom:10px" href="{{ route('linh-vuc.danh-sach') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Trở về danh sách</a>
                                @endif
                                <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                <div class="table-responsive" data-pattern="priority-columns">
                                <table id="quantrivien-datatable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Ảnh đại diện</th>
                                            <th>Tên đăng nhập</th>
                                            <!-- <th>Mật khẩu</th> -->
                                            <th>Họ tên</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                    @if(isset($listQuanTriVienRestore))
                                        <!-- Restore -->
                                        @foreach($listQuanTriVienRestore as $quanTriVien)
                                            <tr>
                                                <td>{{ $quanTriVien->id }}</td>
                                                <td><img @if($quanTriVien->anh_dai_dien=="") src="{{ asset('assets/images/quan-tri-vien/user-empty.png') }}" @else src="{{ asset('assets/images/quan-tri-vien/'.$quanTriVien->anh_dai_dien) }}" @endif width="50px" style="border-radius:100%"  alt=""></td>
                                                <td>{{ $quanTriVien->ten_dang_nhap }} </td>
                                                <td>{{ $quanTriVien->ho_ten }} </td>
                                                <td>
                                                <a href="{{ route('quan-tri-vien.xu-ly-restore',['id'=> $quanTriVien->id]) }}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-restore"></i></a>
                                                <button data-href="{{ route('quan-tri-vien.xu-ly-xoa-hoan-toan',['id'=> $quanTriVien->id]) }}" type="button" class="btn btn-dark waves-effect waves-light force-delete"><i class="mdi mdi-trash-can"></i></button>
                                            </td>
                                            </tr>
                                            @endforeach
                                    @else
                                    <!-- Danh sách Quản trị viên -->
                                            @foreach($listQuanTriVien as $quanTriVien)
                                                <tr>
                                                    <td>{{ $quanTriVien->id }}</td>
                                                    <td><img @if($quanTriVien->anh_dai_dien=="") src="{{ asset('assets/images/quan-tri-vien/user-empty.png') }}" @else src="{{ asset('assets/images/quan-tri-vien/'.$quanTriVien->anh_dai_dien) }}" @endif width="50px" style="border-radius:100%"  alt=""></td>
                                                    <td>{{ $quanTriVien->ten_dang_nhap }} </td>
                                                    <!-- <td>{{ $quanTriVien->mat_khau }} </td> -->
                                                    <td>{{ $quanTriVien->ho_ten }} </td>
                                                    <td>
                                                    <a href="{{ route('quan-tri-vien.cap-nhat',['id'=> $quanTriVien->id]) }}" class="btn btn-purple waves-effect waves-light"><i class=" mdi mdi-pencil-outline"></i></a>
                                                    <a href="{{ route('quan-tri-vien.xoa',['id'=> $quanTriVien->id]) }}" class="btn btn-danger waves-effect waves-light "><i class="fe-trash-2"></i></a>
                                                </td>
                                                </tr>
                                                @endforeach
                                            @endif
                                        
                                    </tbody>
                                </table>
                        </div>
                        </div>
                        </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
@endsection

@section('js')
        <!-- third party js -->
        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script type="text/javascript">
            $(document).ready(function(){
                $("#quantrivien-datatable").DataTable({
                    language: {
                        paginate: {
                            previous: "<i class='mdi mdi-chevron-left'>",
                            next: "<i class='mdi mdi-chevron-right'>"
                        }
                    },
                    drawCallback: function() {
                        $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                    }
                });
            });
        </script>
@endsection