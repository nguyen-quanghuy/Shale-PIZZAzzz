<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  	<link rel="stylesheet" type="text/css" href="../../Style/Style.css">
    <title>Add new Delivery</title>
</header>
<body>
    <nav class="navbar bg-dark sticky-top">	
	    <a href="#" class="navbar-brand">
			<img src="../../../public/style/logo.png" width="90px">
		</a>
		<ul class="nav navbar-top-links navbar-right">
			<li class="nav-search">
				<form role="search" class="app-search hidden-sm hidden-xs">
					<div class="input-group">
						<div class="input-group-prepend">
        					<input type="text" name="txtSearch" class="form-control-sm" placeholder="Search...">
	          				<div class="input-group-text">
	          					<a href="#">
	          					<i class="fas fa-search"></i>
	          					</a>
	          				</div>
        				</div>
      				</div>
				</form>
			</li>
			<li class="profile">
				<a href="#">
				<img src="../../../public/Img/admin.png" class="rounded-circle img-fluid" width="70">
					<b class="hidden-xs text-light">Admin</b>
				</a>
			</li>
		</ul>
    </nav>
	<div class="wrapper">
	<nav id="sidebar">
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="{{route('dashboard')}}">
                        <i class="fas fa-clock"></i>
                        Dash Board
                    </a>
                <li>
                    <a href="{{route('profile')}}">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                </li>
                <li > 
                    <a href="{{route('menutable')}}">
                        <i class="fa fa-table"></i>
                        Menu Table
                    </a>
                </li>
                <li >
                    <a href="{{route('usertable')}}">
                        <i class="fas fa-users"></i>
                        User Table
                    </a>
                </li>
                <li>
                    <a href="{{route('weekend')}}">
                        <i class="fas fa-utensils"></i>
                        Weekend Special
                    </a>
                </li>
                <li>
                    <a href="{{route('gallery')}}">
                        <i class="fas fa-images"></i>
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="{{route('location')}}">
                        <i class="fas fa-compass"></i>
                        Location
                    </a>
                </li>
                <li>
                    <a href="{{route('feedback')}}">
                        <i class="fas fa-paper-plane"></i>
                        Feedback
                    </a>
                </li>
                <li>
                    <a href="{{route('franchiesinfo')}}">
                        <i class="fas fa-question"></i>
                        Franchies Info
                    </a>
                </li>
			</ul>
            <ul class="list-unstyled">
                <li>
                    <a href="#" role='button' class="btn btn-danger">Sign Out</a>
                </li>
            </ul>
        </nav>
    	<!-- Page Content  -->
        <div id="content"> 
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-md-12">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $erorr)
                                        <li>{{$erorr}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('insert_delivery')}}" method='POST'>
                            @csrf
                            <table >
                                <tr>
                                    <td>ID</td>
                                    <td><input type="number" name='nbrId' placeholder="Enter ID" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Customer Id</td>
                                    <td><input type="number" name='nbrCusId' placeholder="Enter Customer Id" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Phone Numbers</td>
                                    <td><input type="number" name='nbrPhone' class="form-control" placeholder="Enter Phone Numbers"></td>
                                </tr>
                                <tr>
                                    <td>Store Name</td>
                                    <td><input type="text" name='txtStoreName' placeholder="Enter Store Name" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Customer Address</td>
                                    <td><input type="text" name='txtCusAddress' placeholder="Enter Customer Address" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Order Code</td>
                                    <td><input type="text" name='txtOrCode' placeholder="Enter Order Code" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-primary w-100" value='Add New ID' style="color: white"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		<script type="text/javascript">
		$(document).ready(function () {
    		$('#sidebarCollapse').on('click', function () {
        		$('#sidebar').toggleClass('active');
   			});
		});
	</script>
</body>
</html>