<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login {{ config('app.name') }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{ asset('t_login/images/icons/favicon.ico') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('t_login/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('t_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('t_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('t_login/vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('t_login/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('t_login/vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('t_login/vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('t_login/vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('t_login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('t_login/css/main.css') }}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
					@csrf
					<span class="login100-form-title p-b-51">
						Login
					</span>
					@error('email')
					<div class="alert alert-primary">
						<span>Email atau password salah.</span>
					</div>
					@enderror
					@error('password')
					<div class="alert alert-primary">
						<span>Email atau password salah.</span>
					</div>
					@enderror
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src="{{ asset('t_login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('t_login/vendor/animsition/js/animsition.min.js') }}"></script>
	<script src="{{ asset('t_login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('t_login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('t_login/vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset('t_login/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('t_login/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('t_login/vendor/countdowntime/countdowntime.js') }}"></script>
	<script src="{{ asset('t_login/js/main.js') }}"></script>

	<script src="{{ asset('admin/assets/js/now-ui-dashboard.min.js?v=1.5.0') }}" type="text/javascript"></script>

</body>
</html>