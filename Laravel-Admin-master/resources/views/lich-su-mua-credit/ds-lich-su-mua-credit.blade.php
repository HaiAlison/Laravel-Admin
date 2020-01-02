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
                                <h4 class="header-title">Danh sách lịch sử mua credit</h4>
                                <table id="lichSuMuaCredit-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Người chơi</th>
                                            <th>Tên gói đã mua</th>
                                            <th>Số credit</th>    
                                            <th>Số tiền</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($listLichSuMuaCredit as $lichSuMuaCredit)
                                        <tr>
                                            <td>{{ $lichSuMuaCredit->id }}</td>
                                            <td>@foreach($listNguoiChoi as $nguoiChoi)
                                                @if($lichSuMuaCredit->nguoi_choi_id == $nguoiChoi->id)
                                                {{ $nguoiChoi->id }}
                                                @endif
                                                @endforeach </td>
                                            <td>@foreach($listGoiCredit as $goiCredit)
                                                @if($lichSuMuaCredit->goi_credit_id  == $goiCredit->id)
                                                {{ $goiCredit->ten_goi }}
                                                @endif
                                                @endforeach </td>
                                            <td>{{ $lichSuMuaCredit->credit}} </td>
                                            <td>{{ $lichSuMuaCredit->so_tien}} </td>
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
                $("#lichSuMuaCredit-datatable").DataTable({
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