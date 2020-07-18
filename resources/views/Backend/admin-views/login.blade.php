<!DOCTYPE html>
<html>
<head>
	<title>Tạo Bảng Đăng Nhập</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
	<div class="row d-flex justify-content-center" style='margin-top: 37px;'>
		<div class="cold-md-12 w-50">
			@if($message = Session::get('errLogin'))
                <div class="alert alert-danger" role="alert">
                    <p>{{$message}}</p>
                </div>
            @endif
			<form method='POST' action="{{route('admin-login')}}">
				@csrf
				<div class='card'>
					<div class="card-header d-flex justify-content-center">
						<h3 class='text-primary'>Login Form</h3>
					</div>
					<div class='card-body'>
						<div class='form-group'>
							<h6 class='form-control-row text-secondary'>Username</h6>
							<input type="text" placeholder="Username" class='form-control' name="txtUserName">
							<span id='mes_n1'></span>
						</div>
						<div class="form-group">
							<h6 class='form-control-row text-secondary'>Password</h6>
							<input type="password" placeholder="Password" class='form-control' name="txtPwd">
							<span id='mes_n2'></span>
						</div>
						<div class='form-group  d-flex justify-content-center'>
							<input class="btn btn-success w-50" type="submit" value="Login">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<script>
	function checkemail(v)
	{
		var f = 'NO';
		// var reg=/^[A-Za-z0-9\.\-\_]+\@[A-Za-z0-9\_\-]+\.[A-Za-z]{2,4}(\.[A-Za-z]+)?$/;
		var reg=/^[a-z]+$/;
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

</body>
</html>