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
    

 <div class="container-fluid mw-100">
  <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="img-menu1/C1.jpg"
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="img-menu1/C2.jpg"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="img-menu1/C3.jpg"
        alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
  
</div><br><br>




<div class="container-fluid">
  <h2 style="color: white;text-align: center;">WEEKEND SPECIAL</h2><br>
<div class="row justify-content-center">
  <div class="col-sm-4 " style="background-color: white; height: auto;padding: 0px">
  <img src="weekendspecial/1.jpg" style="width: 100%">
  <h5 style="font-weight: bold;margin-top: 10px;">&nbsp; SAME PRICE FOR FAVORITE & PREMIUM</h5>
  <p>* Price: 8$ / pizza 9" in Favorite segment.<br>
  * Price: 10$ / pizza 12" in Favorite segment.<br>
  * Apply the same price when buying simultaneously 02 pizzas  </p>

  </div>
  <div class="col-sm-4" style="background-color: white;margin-right: 0px;margin-left: 0px;border-left: 1px solid gray;border-right: 1px solid gray;padding: 0px">
    <img src="weekendspecial/2.jpg" style="width: 100%">
    <h5 style="font-weight: bold;margin-top: 10px">&nbsp;BUY 1 GET 1 - SATURDAY & SUNDAY</h5>
  <p>* Buy 1 Pizza 9" or 12" and Drink. You will get 1 free the same size Pizza<br>
  * Apply for every Saturday and Sunday via Website / Call Center ordering </p>
  </div>
  <div class="col-sm-4" style="background-color: white;padding: 0px">
    <img src="weekendspecial/3.jpg" style="width: 100%">
   <h5 style="font-weight: bold;margin-top: 10px">&nbsp;DISCOUNT 50% FOR Discount 50% for 2nd Pizza - All Week</h5>
  <p>* Apply for buying 9" / 12" pizza.
    * Discount with the same size and lower price pizza.<br>
    * Free ship with bill from 8$ and in trade zone.<br>
  </div>
</div>

<div class="row justify-content-center" style="margin-top: 0px">
  <div class="col-sm-4" style="background-color: white; height: auto;padding: 0px">
  <img src="weekendspecial/4.jpg" style="width: 100%">
  <h5 style="font-weight: bold;margin-top: 10px">&nbsp;Home Meal Deals</h5>
  <p>
    * Good Deals for team. Apply for all Pizza stores.<br>
   * Combo 10$: 1 Pizza 9" Favorite + 1 Side Dish<br>
    * Combo 12$: 1 Pizza 9" Premium + 1 Side Dish<br>
  * Combo 15$: 1 Pizza 12" Favorite + 2 Side Dish
  </p>
  </div>
  <div class="col-sm-4" style="background-color: white;margin-right: 0px;margin-left: 0px;border-left: 1px solid gray;border-right: 1px solid gray;padding: 0px">
    <img src="weekendspecial/5.jpg" style="width: 100%">
    <h5 style="font-weight: bold;margin-top: 10px">&nbsp;DISCOUNT 50% FOR EVERY MONDAY</h5>
  <p>
    * Buy 1 Pizza 9" or 12" and Drink. You will get 1 free the same size Pizza (free delivery when the total bill from 15$) <br>
* Apply for every Saturday and Sunday via Website / Call Center ordering
  </p>
  </div>
  <div class="col-sm-4" style="background-color: white;padding: 0px">
    <img src="weekendspecial/6.jpg" style="width: 100%">
    <h5 style="font-weight: bold;margin-top: 10px">&nbsp;Kiddy Yummy Meals</h5>
  <p>
    * Combo 6$ includes: 1 pizza 7" Favorite + 1 small drink + 1 cute pencil<br>
   * Combo 7$ includes: 1 sausage meal + 1 potato meal + 1 small drink + 1 cute pencil
  </p>
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



</div>

</body>
</html>