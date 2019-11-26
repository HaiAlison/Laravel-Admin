<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Đăng nhập</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
       
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css')}}">
		<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
		
	</head>

    <body >
        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<!-- <div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('assets/images/img-01.png')}}" alt="IMG">
				</div> -->
                
				<form action="{{route('xu-ly-dang-nhap')}}" method="POST" class="login100-form validate-form">
					@csrf
                    <span class="login100-form-title">
						Admin Login
					</span>
					@if(count($errors)>0)
                                <div class="alert alert-danger" id="thong_bao_3s">
									<ul>
                                        <li>{{$errors->first()}}</li>
									</ul>
                                </div> 
                	@endif
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="ten_dang_nhap" id="ten_dang_nhap" placeholder="Tên đăng nhập">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="mat_khau" id="mat_khau" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
				@if (session('thongbao'))     
                <script typpe="text/javascript">
                    function sessionn(){
                        Swal.fire({
                        type:"warning",
                        title:"{{session('thongbao')}}",
                        showConfirmButton:!1,
                        timer:2000})}
                </script>
                @endif
                @yield('main-content')

	<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
	<script src="{{ asset('assets/js/app.min.js') }}"></script>
	<!-- Sweet Alerts js -->
	<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
	@if(Session::has('thongbao'))
        <script>
        sessionn();
        </script>  
	@endif
    </body>
</html>