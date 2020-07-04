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
	<style type="text/css">
		

	</style>
</head>
<body>
	<div class="clearfix w-100">
	   <div class="login-box mx-auto">
		<h1>Login</h1>
		<div class="textbox">
			<img src="style/user.svg" style="width: 12px">
			<input type="text" placeholder="Username" style="font-family: sans-serif;" id="username" name="" value="">
			<span id='mes_n1'></span>
		</div>
		<div class="textbox">
			<img src="style/lock.svg" style="width: 10px">
			<input type="password" placeholder="Password" id="pwd" name="pwd">
			<span id='mes_n2'></span>
		</div>
		<input class="btn btn-dark" type="button" name="" value="Sign In" onclick="kiemtra();">
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