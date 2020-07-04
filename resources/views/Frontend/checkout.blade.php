<!DOCTYPE html>
<html>
<head>
	<title>Shale-PIZZAzzz</title>
	<meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="icon" type="image/png" sizes="16x16" href="css/favicon-16x16.png">
       <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script>
        $(document).ready(function(){
          $('#modalLogin').click(function(){
            $('#login').modal().css('margin-top','150px');
          });
          $('#modalSignup').click(function(){
            $('#signup').modal().css('margin-top','20px');
          });
          $('#swapLogin').click(function(){
            $('#login').modal().css('margin-top','150px');
          });
          $('#swapSignup').click(function(){
            $('#signup').modal().css('margin-top','20px');
          });
          $('#btnLogin').click(function(){
            let user = $('input[name="txtUser"]').val();
            let pass = $('input[name="txtPass"]').val();
            let f1 = true;
            $('#mesUser').text('');
            $('#mesPass').text('');
            if(!isString(user)){
              $('#mesUser').text('The UserName must be at least 5 characters');
              f1 = false;
            }
            if(!isPass(pass)){
              $('#mesPass').text('Password must be at least 5 characters');
              f1 = false;
            }
            return f1;
            if(f1==true){
              document.getElementById('requestLogin').submit();
            }
          });
          $('#btnSignup').click(function(){
            let email = $('input[name="txtEmail"]').val();
            let user2 = $('input[name="txtName"]').val();
            let pass2 = $('input[name="txtPwd_user"]').val();
            let rePass = $('input[name="txtRepass"]').val();
            let phone = $('input[name="nbrPhone"]').val();
            let f2 = true;
            $('#mesUser2').text('');
            $('#mesPass2').text('');
            $('#mesEmail').text('');
            $('#mesRepass').text('');
            $('#mesPhone').text('');
            if(!isEmail(email)){
              $('#mesEmail').text('Syntax ERROR, Ex: orionazo9@gmail.com(.vn)');
              f2 = false;
            }
            if(!isPhone(phone)){
              $('#mesPhone').text('Numnber Phone must be 11 characters.');
              f2 = false;
            }
            if(!isString(user2)){
              $('#mesUser2').text('The UserName must be at least 5 characters');
              f2 = false;
            }
            if(!isPass(pass2)){
              $('#mesPass2').text('Password must be at least 5 characters');
              f2 = false;
            }
            if(confirmPass(pass2,rePass)==false){
              $('#mesRepass').text('Must same Password');
              f2 = false;
            }
            return f2;
            if(f2==true){
              document.getElementById('requestSignup').submit();
            }
          });
          function isEmail(_email){
            var reg = /^[A-Za-z0-9\_]+\@[A-Za-z0-9]{2,5}\.[A-Za-z0-9]{2,5}(\.[A-Za-z0-9]{2,5})?$/;
            return reg.test(_email);
          }
          function isString(_user){
            var reg = /^[A-Za-z0-9\_ ]{5,50}$/;
            return reg.test(_user);
          }
          function isPass(_pass){
            var reg = /^[A-Za-z0-9\_ ]{5,20}$/;
            return reg.test(_pass);
          }
          function confirmPass(_pass,_rePass){
            var f = false;
            if(_pass==_rePass){
              f = true;
            }
            return f;
          }
          function isPhone(_phone){
            var reg = /^\d{11}$/;
            return reg.test(_phone);
          }
        });
      </script>


<script>
    $(document).ready(function () {
    $("input[name='inlineRadioOptions']").click(function () {
        var checkedValue = $("input[name='inlineRadioOptions']:checked").val();
        console.log(checkedValue);
        if (checkedValue == "option1") {
            $("#collapseOne").collapse('show');
            $("#collapseTwo").collapse('hide');
        } else if (checkedValue == "option2") {
            $("#collapseOne").collapse('hide');
            $("#collapseTwo").collapse('show');

        } else {
            console.log("Oops.");
        }
    });
});
  </script>


</head>
<body>

<div class="container bigbox mw-100 h-100">

<div class="mw-100 h-25" id='header' align='center'>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mx-auto bg-warning">
    <a class="navbar-brand" href="{{url('home')}}">
        <img src="css/logo.png" style="width: 120px">
    </a>
   <div class="collapse navbar-collapse" id="navb" align='center'>
      <ul class="navbar-nav mr-auto">
         <li class="nav-item">
           <a class="nav-link" href="{{url('home')}}" style="color: white" id="active" align='center'>HOME</a>
        </li>

         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="{{route('menu')}}"  style="color: white; font-weight: bold;">MENU</a>
            <ul class="dropdown-content" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('pizza')}}">PIZZA</a></li>
                <li><a class="dropdown-item" href="{{route('galicbreads')}}">GARLIC BREADS</a></li>
                <li><a class="dropdown-item" href="{{route('pizzasandwiches')}}">PIZZA SANDWICHES</a></li>
                <li><a class="dropdown-item" href="{{route('dessert')}}">DESSERTS</a></li>
                <li><a class="dropdown-item" href="{{route('beverages')}}">BEVERAGES</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="menudownload/3.jpg" download="menudownload/3.jpg" id="active" style="color: white">MENU DOWNLOAD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('storelocation')}}" id="active" style="color: white">STORE LOCATION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('f.location')}}" id="active" style="color: white">LOCATIONS</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="{{route('f.feedback')}}" id="active" style="color: white">FEEDBACK</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="{{route('detailfraninfo')}}" id="active" style="color: white">FRANCHISE INFO</a>
        </li>

      </ul>
    </div>


    
       <div>
        <div id= "signin-signup">
          <ul class="nav navbar-nav navbar-toggler-right">
          @if(Auth::check())
                <li>
                  <img src="css/user.png"> 
                  <a href="#">Hello {{Auth::User()->name}} / </a>
                  <a href="{{route('login.logout')}}"> Logout</a>
                  <a class="btn btn-success btn-sm ml-3" href="{{url('CartShow')}}">
                      <i class="fa fa-shopping-cart"></i> Cart
                      <span class="badge badge-light"></span>
                  </a>
              </li>
            @else
                <li>
                <img src="css/user.png">
                <a href="#" data-toggle='modal' id='modalLogin' style='color: white'>SIGN IN /</a>
                <a href="#" data-toggle='modal' id='modalSignup' style='color: white'>SIGN UP</a>
                <a class="btn btn-success btn-sm ml-3" href="{{url('CartShow')}}">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light"></span>
                </a>
                </li>
            @endif
          </ul>
        </div>
      </div>

 <!--MODAL-LOGIN-->
    <div class="modal" id='login'>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login Here</h4>
            <button class="close" data-dismiss='modal'>&times;</button>
          </div>
          <div class="modal-body">
              @if($message = Session::get('false'))
                  <div class="alert alert-danger">
                    <p>{{$message}}</p>
                  </div>
              @endif
              <form method="POST" id='requestLogin' action="{{route('login.signin')}}">
                @csrf
                <table class="w-75">
                  <tr>
                    <td><span class="fas fa-user" style='color: grey'></span></td>
                    <td><input type="text" placeholder="Username or E-mail"  name='txtUser' class="form-control"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span id='mesUser' class="mesError"></span></td>
                  </tr>
                  <tr>
                    <td><div style='margin-top: 10px'><span class="fas fa-unlock-alt" style='color: grey'></span></div></td>
                    <td><input type="password" placeholder="Password"  name='txtPass' class="form-control" style='margin-top: 10px'></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span id='mesPass' class="mesError"></span></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <!-- <input type="hidden" name='_token' value="{{csrf_token()}}"> -->
                      <input type="checkbox" name='remember' value='remember_me'> Remember me
                      <div class="float-right">New User? <a href="#" data-toggle='modal' id='swapSignup' data-dismiss='modal'>Register here</a></div>
                    </td>
                  </tr>
                </table>
                <button class="btn btn-success" style='margin-top: 10px' id='btnLogin' type='submit'>LOGIN</button>
              </form>
              
            
          </div>
          <div class="modal-footer">
            <button data-dismiss='modal' class="btn-danger">Close</button>
          </div>
        </div>
      </div>
    </div>

  <!--MODAL-SIGNUP-->
    <div class="modal" id='signup'>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Create Account</h4>
            <button class="close" data-dismiss='modal'>&times;</button>
          </div>
          <form action="{{route('login.signup')}}" method='POST' id='requestSignup'>
          <div class="modal-body">
            <p style='color: grey'>Get started with your free account</p>
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                  <p>{{$message}}</p>
                </div>
            @endif
            @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                   @foreach($errors->all() as $erorr)
                     <li>{{$erorr}}</li>
                   @endforeach
                </ul>
              </div>
            @endif
              <table class="w-75">
                @csrf
                <tr>
                  <td>Username</td>
                  <td><input type="text" placeholder="Username" class="form-control" name='txtName'></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span id='mesUser2' class="mesError"></span></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="email" placeholder="Email" name='txtEmail' class="form-control" placeholder="Email" style='margin-top: 10px'></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span id='mesEmail' class="mesError"></span></td>
                </tr>
                <tr>
                  <td>Phone Number</td>
                  <td><input type="number" placeholder="Phone Number" name='nbrPhone' class="form-control" placeholder="Email" style='margin-top: 10px'></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span id='mesPhone' class="mesError"></span></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type="password" name='txtPwd_user' placeholder="Password" class="form-control" style='margin-top: 10px' placeholder="Password"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span id='mesPass2' class="mesError"></span></td>
                </tr>
                <tr>
                  <td>Password (Confirm)</td>
                  <td><input type="password" placeholder="Confirm Password" class="form-control" style='margin-top: 10px' name='txtRepass'></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span id='mesRepass' class="mesError"></span></td>
                </tr>
                <tr>
                  <td></td>
                  <td><div class="float-right">Have an account? <a href="#" data-toggle='modal' id='swapLogin' data-dismiss='modal'>Log in</a></div></td>
                </tr>
              </table>
              <button class="btn btn-success" id='btnSignup'>REGISTRATION</button>
          </div>
          </form>
          <div class="modal-footer">
            <button data-dismiss='modal' class="btn-danger">Close</button>
          </div>
        </div>
      </div>
    </div>




     <button class=  "navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
     </button>
   </nav><br>
  </div>



 <h2 style="color: white; text-align: center;font-weight: bold; font-size: 35px">Shale-PIZZAAsss</h2>
          <br>

<h2 style="color: white; text-align: center;font-weight: bold; font-size: 35px">CHECK OUT</h2>
          <br>





    <div class="container">
      <div class="content">
          <div class="row">
            <div class="col-md-6" >
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Thông Tin Thanh Toán</h4>
                </div>
                <div class="card-body">
                
                  
                  <p>Please select your check out:</p>

                  <label><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">Delivery Order (Applied for bill over 12$)</label><br>
                  
                <label><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Carry Out Order (Receive your order at the store)</label><br>
                
                @if($message = Session::get('falseOne'))
                  <div class='alert alert-danger'>
                    <p>{{$message}}</p>
                  </div>
                @endif
                @if(Auth::check())
                <form method="POST" action="{{route('cart.pay', Auth::User()->id)}}">
                @csrf
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">First Name</label>
                                      <input type="text" class="form-control" name="txtFirstName">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Last Name</label>
                                      <input type="text" class="form-control" name="txtLastName">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Email</label>
                                      <input type="text" class="form-control" name="txtEmail">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Phone Number</label>
                                      <input type="text" class="form-control" name="nbrPhone">
                                    </div>
                                  </div>
                                </div>

                              
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">City</label>
                                      <input type="text" class="form-control" name="txtCity">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">District</label>
                                      <input type="text" class="form-control" name="txtDistrict">
                                    </div>
                                  </div>
                                </div>


                               <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">House Number, Building Name, Road Name</label>
                                      <input type="text" class="form-control" name="txtAddress">
                                    </div>
                                  </div>
                                </div>



                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Order Note</label>
                                      <div class="form-group">

                                        <textarea class="form-control" rows="5" name='txtCmt'></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                                </form>
                                @else
                                <form method="POST" action="{{route('cart.pays')}}">
                                  @csrf
                                  <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                          <div class="panel-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">First Name</label>
                                                        <input type="text" class="form-control" name="txtFirstName">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Last Name</label>
                                                        <input type="text" class="form-control" name="txtLastName">
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Email</label>
                                                        <input type="text" class="form-control" name="txtEmail">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Phone Number</label>
                                                        <input type="text" class="form-control" name="nbrPhone">
                                                      </div>
                                                    </div>
                                                  </div>

                                                
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">City</label>
                                                        <input type="text" class="form-control" name="txtCity">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">District</label>
                                                        <input type="text" class="form-control" name="txtDistrict">
                                                      </div>
                                                    </div>
                                                  </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">House Number, Building Name, Road Name</label>
                                                        <input type="text" class="form-control" name="txtAddress">
                                                      </div>
                                                    </div>
                                                  </div>



                                                  <div class="row">
                                                    <div class="col-md-12">
                                                      <div class="form-group">
                                                        <label>Order Note</label>
                                                        <div class="form-group">

                                                          <textarea class="form-control" rows="5" name='txtCmt'></textarea>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                                                  </form>
                                @endif
                                <div class="clearfix">
                                  

                                </div>
                        </div>
                    </div>
                  </div>
                      @if($message = Session::get('falseTwo'))
                      <div class='alert alert-danger'>
                        <p>{{$message}}</p>
                      </div>
                      @endif
                      @if(Auth::check())
                      <form method="POST" action="{{route('cart.payTwo', Auth::User()->id)}}">
                      @csrf
                      <div class="panel panel-default">
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                  <p>Choose One</p>
                                  <select class="form-control" name='CarryOrder'>
                                    <option selected>Choose a store to receive your order</option>
                                    <option value="Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh">1. Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh</option>
                                    <option value="Shale Pizza Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan">2. Shale Pizza Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan</option>
                                    <option value="Shale Pizza My Đinh 6 Đong Bat, Cau Giay">3. Shale Pizza My Đinh 6 Đong Bat, Cau Giay</option>
                                    <option value="Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai">4. Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai</option>
                                  </select><br><br>
                                  <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">First Name</label>
                                      <input type="text" class="form-control" name="FirstName">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Last Name</label>
                                      <input type="text" class="form-control" name="LastName">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Email</label>
                                      <input type="text" class="form-control" name="Email">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Phone Number</label>
                                      <input type="text" class="form-control" name="Phone">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Order Note</label>
                                      <div class="form-group">

                                        <textarea class="form-control" rows="5" name='Cmt'></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br><br>
                                  <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                              </div>
                          </div>
                      </div>
                      </form>
                    @else
                    <form method="POST" action="{{route('cart.payTwos')}}">
                      @csrf
                      <div class="panel panel-default">
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                  <p>Choose One</p>
                                  <select class="form-control" name='CarryOrder'>
                                    <option selected>Choose a store to receive your order</option>
                                    <option value="Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh">1. Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh</option>
                                    <option value="Shale Pizza Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan">2. Shale Pizza Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan</option>
                                    <option value="Shale Pizza My Đinh 6 Đong Bat, Cau Giay">3. Shale Pizza My Đinh 6 Đong Bat, Cau Giay</option>
                                    <option value="Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai">4. Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai</option>
                                  </select><br><br>
                                  <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">First Name</label>
                                      <input type="text" class="form-control" name="FirstName">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Last Name</label>
                                      <input type="text" class="form-control" name="LastName">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Email</label>
                                      <input type="text" class="form-control" name="Email">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Phone Number</label>
                                      <input type="text" class="form-control" name="Phone">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Order Note</label>
                                      <div class="form-group">

                                        <textarea class="form-control" rows="5" name='Cmt'></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br><br>
                                  <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                              </div>
                          </div>
                      </div>
                      </form>
                      @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-profile">
                <div class="card-header card-header-primary" >
                  <h4 class="card-title">ORDER DETAIL</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray"></h6>
                  <div class="side-cart">
                    <div class="side-cart-title">
                    <a href="#cart" style="text-decoration: none"><h3>Cart</h3></a>
                      @foreach($cartContent as $select_cart)
                      <p><img src="{{asset('product/'.$select_cart->attributes->img)}}" alt="pizza" width="90px" height="90px"></p>
                      <p>{{$select_cart->name}}</p>
                      @endforeach
                    </div>
                    <strong>ID ORDER: {{$IDORDER}}</strong>
                    <div class="cart-checkout-mobile">
                      <div class="cart_icon">
                        <span class="fas fa-shopping-bag"></span>
                        <span class="amount">{{$cartTotalQuantity}}</span>
                      </div>
                      <div class="total-container">
                        <div class="total-wrap">
                          <div class="total-text">
                            <p>Total:</p>
                            <strong>{{$totalPrice}} $</strong>
                          </div>
                        </div>
                      </div>
                    </div>
      


                  </div>
                  
                </div>
            </div>
          </div>
        </div>
      </div><br><br>





<div class="mw-100 h-25" id='footer'>
 <footer class="domino-footer-1 bg-dark text-center">
      <article>
        <div class="container" style="color: white">
          <div class="row">
            <div class="col-lg-6 left-footer">
              <div class='Module Module-285' style="display: flex;">
                <ul class="copyright" >
                    <li><a href="eProject.html">SHALE'S PIZZA</a></li>
                    <li><a href="#">PRIVACY POLICY</a></li>
                </ul></div>
            </div>
            <div class="col-lg-6 right-footer" style="display: flex;">
              <div class="hotline" style="display: inline-block;">
                <h2>Hotline</h2>
                <a href="tel:19006099">
                  <img src="css/hotline.png" alt=""></a>
              </div>
              <div class="logo_footer" style="display: inline-block;">
                <img src="css/footer_logo.png" alt="">
              </div>
            </div style="display: inline-block;"> 
            <a class="hotline-fixed" href="tel:19006099"><span class="fas fa-phone"></span></a>
          </div><hr style="background: white">
        </div>
      </article>

    <div class="domino-footer-1 text-center py-3" style="color: white;">© 2020 Copyright:
      <a href="#"> Truong Sa 3</a>
    </div>
    <h5 style="color:lavender;">SHARE</h5>
       <button style="color: white" class="btn fa fa-amazon"></button>
       <button style="color: white" class="btn fa fa-instagram"></button>
       <button style="color: white" class="btn fa fa-facebook"></button>
       <button style="color: white" class="btn fa fa-apple"></button>
    </footer>
</div>



</body>

</html>