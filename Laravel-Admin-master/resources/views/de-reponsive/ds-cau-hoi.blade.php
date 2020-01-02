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
                        <div class="card-box">
                            <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                    <h4 class="header-title">Danh sách câu hỏi</h4>
                                <a href="{{ route('cau-hoi.them-moi') }}" class="btn btn-primary waves-effect waves-light" style="margin-bottom:10px">Thêm mới</a>                               
                                        
                                <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                <div class="table-responsive" data-pattern="priority-columns">
                                <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th >ID</th>
                                            <th >Nội dung</th>
                                            <th >Lĩnh vực</th>
                                            <th >Phương án A</th>
                                            <th >Phương án B</th>
                                            <th >Phương án C</th>
                                            <th >Phương án D</th>
                                            <th >Đáp án</th>
                                            <th ></th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach($listCauHoi as $cauHoi)
                                        <tr>
                                            <td>{{ $cauHoi->id }}</td>
                                            <td>{{ $cauHoi->noi_dung }} </td>
                                            <td> @foreach($listLinhVuc as $linhVuc)
                                            @if($linhVuc->id == $cauHoi->linh_vuc_id)
                                            {{ $linhVuc->ten_linh_vuc }}
                                            @endif
                                            @endforeach </td>
                                            <td>{{ $cauHoi->phuong_an_a }} </td>
                                            <td>{{ $cauHoi->phuong_an_b }} </td>
                                            <td>{{ $cauHoi->phuong_an_c }} </td>
                                            <td>{{ $cauHoi->phuong_an_d }} </td>
                                            <td>{{ $cauHoi->dap_an }} </td>
                                            <td >
                                            <a href="{{ route('cau-hoi.cap-nhat',['id'=> $cauHoi->id]) }}" class="btn btn-purple waves-effect waves-light"><i class=" mdi mdi-pencil-outline"></i></a>
                                            <button onclick="del()" type="button" class="btn btn-danger waves-effect waves-light "><i class="fe-trash-2"></i></button>
                                            <script type="text/javascript">
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
                                                        window.location.href = "{{ route('cau-hoi.xoa',['id'=> $cauHoi->id]) }}";
                                                    }
                                                    })
                                                };
                                            </script>
                                           </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                        </table>
                                        </div>
                                        </div>
                                        </div>
                                    </div> <!-- end .table-responsive -->

                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
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

        <script src="{{ asset('assets/libs/rwd-table/rwd-table.min.js') }}"></script>

        <!-- Init js -->
        <script src="{{ asset('assets/js/pages/responsive-table.init.js') }}"></script>

        <!-- Datatables init -->
        <script type="text/javascript">
            $(document).ready(function(){
                $("#cauHoi-datatable").DataTable({
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
        <!-- @if(isset($linhVuc)) 
        <script type="text/javascript">
           $( document ).ready(function() {
	            $('.delete').click(function(){
	    	Swal.fire({
			  title: 'có muốn xóa không?',
			  text: "Bạn chắn với điều này chứ!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Có',
              cancelButtonText:'Không'
			}).then((result) => {
			  if (result.value) {
                window.location.href = "{{ route('cau-hoi.xoa',['id'=> $cauHoi->id]) }}";
			  }
			});
	        });
            });
        </script>
        @endif -->
@endsection