<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="icon" href="{!! asset('assets/icons/logo.png') !!}"/>
	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/bootstrap/css/bootstrap.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/animate/animate.css') !!}"> 
	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/css-hamburgers/hamburgers.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/animsition/css/animsition.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/select2/select2.min.css') !!}"> 
	<link rel="stylesheet" type="text/css" href="{!! asset('vendor/daterangepicker/daterangepicker.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/util.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}">
</head>
<body>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="/api/login" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nip">
						<input class="input100" type="text" name="nip" placeholder="nip">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">

					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="{!! asset('vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
	<script src="{!! asset('vendor/animsition/js/animsition.min.js') !!}"></script>
	<script src="{!! asset('vendor/bootstrap/js/popper.js') !!}"></script>
	<script src="{!! asset('vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('vendor/select2/select2.min.js') !!}"></script>
	<script src="{!! asset('vendor/daterangepicker/moment.min.js') !!}"></script>
	<script src="{!! asset('vendor/daterangepicker/daterangepicker.js') !!}"></script>
	<script src="{!! asset('vendor/countdowntime/countdowntime.js') !!}"></script>
	<script src="{!! asset('js/main.js') !!}"></script>
</body>
</html>