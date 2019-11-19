@extends('layout')
@section('main-content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Danh sách câu hỏi</h4>
                    <a href="{{route('cau-hoi.them-moi')}}" class="btn btn-primary waves-effect waves-light">Thêm</a>
                    <table id="cau-hoi-table" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nội dung</th>
                                <th>Lĩnh vực</th>
                                <th>Phương án a</th>
                              	<th>Phương án b</th>
                                <th>Phương án c</th>
                                <th>Phương án d</th>
                                <th>Đáp án</th>
                                <th>Edit</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                            @foreach($listCauHoi as $cauHoi)
                            <tr>
                                <td>{{$cauHoi->id}}</td>
                                <td>{{$cauHoi->noi_dung}}</td>
                                <td>{{$cauHoi->linhVuc->ten_linh_vuc}}</td>
                                <td>{{$cauHoi->phuong_an_a}}</td>
                                <td>{{$cauHoi->phuong_an_b}}</td>
                                <td>{{$cauHoi->phuong_an_c}}</td>
                                <td>{{$cauHoi->phuong_an_d}}</td>
                                <td>{{$cauHoi->dap_an}}</td>

                                <td>
                                    <!-- button edit -->
                                    <a href="{{route('cau-hoi.cap-nhat',['id'=> $cauHoi->id])}}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-pencil-minus-outline"></i></a></td>
                                <td>
                                    <!-- button xoa -->
                                    <a  href="{{route('cau-hoi.xoa',['id'=>$cauHoi->id])}}"class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-delete-sweep-outline"></i>
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
                $("#cau-hoi-table").DataTable({ //#id ở trên table để sử dụng datatable. 
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