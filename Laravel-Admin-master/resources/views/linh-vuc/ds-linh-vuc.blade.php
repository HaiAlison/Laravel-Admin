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
                                <h4 class="header-title">Danh sách lĩnh vực @if(isset($listLinhVucRestore)) đã xóa @endif</h4>
                                @if(!isset($listLinhVucRestore))
                                <div style="display:flex;justify-content: center;align-items:center;">
                                    <a style="margin-bottom:10px" href="{{ route('linh-vuc.them-moi') }}" class="btn btn-info btn-rounded waves-effect waves-light">
                                                <span class="btn-label">
                                                <i class=" fas fa-plus">
                                                </i>
                                                </span>Thêm mới<i>
                                                </i>
                                    </a>
                                    <a style="margin-bottom:10px;margin-left:10px" href="{{ route('linh-vuc.restore') }}" class="btn btn-success btn-rounded waves-effect waves-light">
                                            <span class="btn-label">
                                            <i class="mdi mdi-restore">
                                            </i>
                                            </span>Phục hồi<i>
                                            </i>
                                </a>
                                </div>
                                @else
                                <a style="margin-bottom:10px" href="{{ route('quan-tri-vien.danh-sach') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Trở về danh sách</a>
                                @endif
                                <table id="linhvuc-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên lĩnh vực</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                    @if(isset($listLinhVucRestore))
                                     <!-- Restore -->
                                        @foreach($listLinhVucRestore as $linhVuc)
                                            <tr>
                                                <td>{{ $linhVuc->id }}</td>
                                                <td>{{ $linhVuc->ten_linh_vuc }} </td>
                                                <td>
                                                <a href="{{ route('linh-vuc.xu-ly-restore',['id'=> $linhVuc->id]) }}"  class="btn btn-success waves-effect waves-light "><i class="mdi mdi-restore"></i></a>
                                                <!-- <script type="text/javascript">
                                                    function del(){
                                                        Swal.fire({
                                                        title: 'có muốn khôi phục không?',
                                                        text: "Bạn chắn với điều này chứ!",
                                                        type: 'question',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Có',
                                                        cancelButtonText:'Không'
                                                        }).then((result) => {
                                                        if (result.value) {
                                                            window.location.href = "{{ route('linh-vuc.xu-ly-restore',['id'=> $linhVuc->id]) }}";
                                                        }
                                                        })
                                                    };
                                                </script> -->
                                            </td>
                                            </tr>
                                            @endforeach
                                    @else
                                                <!-- Danh sách -->
                                            @foreach($listLinhVuc as $linhVuc)
                                            <tr>
                                                <td>{{ $linhVuc->id }}</td>
                                                <td>{{ $linhVuc->ten_linh_vuc }} </td>
                                                <td>
                                                <a href="{{ route('linh-vuc.cap-nhat',['id'=> $linhVuc->id]) }}" class="btn btn-purple waves-effect waves-light"><i class=" mdi mdi-pencil-outline"></i></a>
                                                <button data-href="{{ route('linh-vuc.xoa',['id'=> $linhVuc->id]) }}" type="button" class="btn btn-danger waves-effect waves-light change-status"><i class="fe-trash-2"></i></button>
                                                <!-- <script type="text/javascript">
                                                    function del(){
                                                        Swal.fire({
                                                        title: 'có muốn xóa không?',
                                                        text: "Bạn chắn với điều này chứ!",
                                                        type: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Có',
                                                        cancelButtonText:'Không'
                                                        }).then((result) => {
                                                        if (result.value) {
                                                            window.location.href = "{{ route('linh-vuc.xoa',['id'=> $linhVuc->id]) }}";
                                                        }
                                                        })
                                                    };
                                                </script> -->
                                            </td>
                                            </tr>
                                            @endforeach
                                    @endif
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
                $("#linhvuc-datatable").DataTable({
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