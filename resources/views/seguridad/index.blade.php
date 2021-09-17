<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
	
    <link rel="stylesheet" href="{{asset('css/bootstrap4css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/jquery-confirmv3/jquery-confirm.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('login/login.css')}}">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="{{asset('logos/logo_fge.png')}}" class="brand_logo drop" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="password">
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 				<button type="button" name="button" class="btn login_btn">INICIAR</button>
				   			</div>
					</form>
				</div>
			
			</div>
		</div>
	</div>
<!--JS-->
<script src="{{asset('js/jquery/jquery-3.3.1.min.js')}}"></script>	 
<script src="{{asset('js/popper/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap4js/bootstrap.min.js')}}"></script>
</body>
</html>