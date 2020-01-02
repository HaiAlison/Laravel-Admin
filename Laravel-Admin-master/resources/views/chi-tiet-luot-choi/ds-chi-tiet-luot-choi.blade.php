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
<div class="row" >
                    <div class="col-12" >
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách chi tiết lượt chơi</h4>
                                <!-- <a href="#" class="btn btn-primary waves-effect waves-light" style="margin-bottom:10px">Thêm mới</a> -->
                                <table id="chiTietLuotChoi-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Lượt chơi thứ</th>
                                            <th>Câu hỏi</th>
                                            <th>Phương án đã chọn</th>    
                                            <th>Điểm</th>    
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach($listChiTietLuotChoi as $chiTietLuotChoi)
                                        <tr>
                                            <td>{{ $chiTietLuotChoi->id }}</td>
                                            <td>@foreach($listLuotChoi as $luotChoi)
                                                @if($chiTietLuotChoi->luot_choi_id == $luotChoi->id)
                                                {{ $luotChoi->id }}
                                                @endif
                                                @endforeach </td>
                                            <td>@foreach($listCauHoi as $cauHoi)
                                                @if($chiTietLuotChoi->cau_hoi_id == $cauHoi->id)
                                                {{ $cauHoi->noi_dung }}
                                                @endif
                                                @endforeach </td>
                                            <td>{{ $chiTietLuotChoi->phuong_an}} </td>
                                            <td>{{ $chiTietLuotChoi->diem}} </td>
                                            <!-- <td >
                                            <a href="{{ route('nguoi-choi.cap-nhat',['id'=> $chiTietLuotChoi->id]) }}" class="btn btn-purple waves-effect waves-light"><i class=" mdi mdi-pencil-outline"></i></a>
                                            <a href="{{ route('nguoi-choi.xoa',['id'=> $chiTietLuotChoi->id]) }}" class="btn btn-danger waves-effect waves-light"><i class="fe-trash-2"></i></a>
                                           </td> -->
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
                $("#chiTietLuotChoi-datatable").DataTable({
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