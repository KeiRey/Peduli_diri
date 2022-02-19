<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi Akun</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('asset/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="POST" action="/simpanregistrasi">@csrf
					<span class="login100-form-title p-b-43">
						Register Akun
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Nama Tidak Boleh Kosong">
						<input class="input100" type="text" name="name">
						<span class="label-input100">Nama</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="No Telpon Tidak Boleh Kosog">
						<input class="input100" type="text" name="no_telp">
						<span class="label-input100">No Telpon</span>
					</div>

					<div class="wrap-input100 rs3 validate-input" data-validate = "Email Tidak Boleh Kosong">
						<input class="input100" type="email" name="email">
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 rs4 validate-input" data-validate="Password Tidak Boleh Kosog">
						<input class="input100" type="password" name="password">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>
					
					<div class="text-center w-full p-t-23">
						<a href="/login" class="txt1">
							Udah Punya Akun
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{asset('asset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('asset/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/js/main.js')}}"></script>

    @include('sweetalert::alert')

</body>
</html>