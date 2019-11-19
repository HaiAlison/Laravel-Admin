@extends('layout')
@section('main-content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  
                    <h4 class="header-title">Danh sách gói credit</h4>
                    <div> 
                        <a href="{{route('nguoi-choi.them-moi')}}" class="btn btn-primary waves-effect waves-light">Thêm</a>
                    </div>
                    <table id="nguoi-choi-table" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên đăng nhập </th>
                                <th>Email</th>
                                <th>Hình đại diện</th>
                                <th>Điểm cao nhất</th>
                                <th>Credit</th>
                                <th>Edit</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($listNguoiChoi as $nguoiChoi)
                            <tr>
                                <td>{{$nguoiChoi->id}}</td>
                                <td>{{$nguoiChoi->ten_dang_nhap}}</td>
                                <td>{{($nguoiChoi->email)}}</td>
                                <td>{{($nguoiChoi->hinh_dai_dien)}}</td>
                                <td>{{($nguoiChoi->diem_cao_nhat)}}</td>
                                <td>{{($nguoiChoi->credit)}}</td>
                                <td>
                                    <!-- button edit -->
                                    <a href="{{route('nguoi-choi.cap-nhat',['id'=> $nguoiChoi->id])}}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-pencil-minus-outline"></i></a></td>
                                <td>
                                    <!-- button xoa -->
                                    <a  href="{{route('nguoi-choi.xoa',['id'=>$nguoiChoi->id])}}"class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-delete-sweep-outline"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
    @endsection

    @section('css')
     <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel=" stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    @endsection

    @section('js')
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
        <script type="text/javascript">
            $(document).ready(function(){
                $("#linh-vuc-table").DataTable({
                    language:{paginate:{
                        previous:"<i class='mdi mdi-chevron-left'>",
                        next:"<i class='mdi mdi-chevron-right'>"
                        }
                    },
                    drawCallback:function(){
                        $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                    }
                });
            });
        </script>
        @endsection