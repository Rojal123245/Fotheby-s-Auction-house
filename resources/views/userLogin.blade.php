<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="newcss/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="newcss/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="newcss/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="newcss/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="newcss/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="newcss/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="newcss/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="newcss/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="newcss/css/util.css">
	<link rel="stylesheet" type="text/css" href="newcss/css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(newcss/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				
				{{ Form::open(['route'=>'clientcheck', 'name' => 'frmclientcheck', 'class'=>'login100-form validate-form']) }}
				<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
					<span class="label-input100">Email</span>
					{{ Form::text('email', null, ['class'=>'input100 txtauctionTitle', 'placeholder'=>'Enter Email']) }}
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
					<span class="label-input100">Password</span>
					
					{{ Form::password('password', null, ['class'=>'input100 txtauctionTitle', 'placeholder'=>'Enter Password']) }}
					<span class="focus-input100"></span>
				</div>

				<div class="flex-sb-m w-full p-b-30">
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div>
						<a href="#" class="txt1">
							Forgot Password?
						</a>
					</div>
				</div>

				<div class="container-login100-form-btn">

					{{ Form::button('<i class="fa fa-sign-in"></i> Login', ['type' => 'submit', 'class' => 'btn btn-success'] )  }}
					<a href="{{ route('logout') }}" class="btn btn-warning test pull-right"  ><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
					{{ Form::close() }}
				</div>
				
			</div>

		</div>

	</div>

	<!--===============================================================================================-->
	<script src="newcss/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="newcss/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="newcss/vendor/bootstrap/js/popper.js"></script>
	<script src="newcss/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="newcss/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="newcss/vendor/daterangepicker/moment.min.js"></script>
	<script src="newcss/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="newcss/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="newcss/js/main.js"></script>

</body>
</html>