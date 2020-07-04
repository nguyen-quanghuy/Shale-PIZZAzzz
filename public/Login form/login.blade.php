<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shale-Pizza Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>


<script>
	function checkemail(v)
	{
		var f = 'NO';
		var reg=/^[A-Za-z0-9\.\-\_]+\@[A-Za-z0-9\_\-]+\.[A-Za-z]{2,4}(\.[A-Za-z]+)?$/;
		// var reg=/^[a-z]+$/;
		if (reg.test(v)==true) f="YES" ;
		return f;
	}

	function kiemtra(){
			var flag = true;
			var pwd="";
			var user = document.getElementById('username').value;
			 pwd = document.getElementById('pwd').value;
			if(checkemail(user)=='NO')
			{
				showMessage('mes_n1','Sai định dạng của email');
				flag = false;
			}else
			{
				showMessage('mes_n1','');
			}

			if(pwd.length<8){
				showMessage('mes_n2',"Password yêu cầu ít nhất 8 ký tự");
				flag = false;
			}else{
				showMessage('mes_n2','');
			}

			if(flag==true){
				alert('Bạn đã đăng nhập thành công');
			}
			// return flag;
		}

	function showMessage(_id,_mes)
		{
			document.getElementById(_id).innerHTML = _mes;
			document.getElementById(_id).style.color ='red';
		}

</script>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img src="images/logo.png" width="150px" style="margin-left: 30px">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Shale-Pizza Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username" id="username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						
					</div><span id='mes_n1'></span>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password" id="pwd">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						
					</div><span id='mes_n2'></span>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="kiemtra();">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>