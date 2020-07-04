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
  	<link rel="stylesheet" type="text/css" href="../Style/Style.css">
	<title>Profile</title>
</head>
<body>
	<nav class="navbar bg-dark sticky-top">	
	    <a href="#" class="navbar-brand">
			<img src="../style/logo.png" width="90px">
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
        <img src="../Img/admin.png" class="rounded-circle img-fluid" width="70">
					<b class="hidden-xs text-light">Admin</b>
				</a>
			</li>
		</ul>
	</nav>
	<div class="wrapper">
        <!-- Sidebar  -->
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
            <h2 align="center">Profile</h2><br>
			<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company</label>
                          <input type="text" class="form-control" value="Shale-Pizza">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" value="thangnguyen">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" value="thangnguyen@gmail.com">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control" value="Thang">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" value="Nguyen">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control" value="Hai Ba Trung, Ha Noi">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control" value="Ha Noi">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control" value="Vietnam">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control" value="100000">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">

                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img src="../Img/admin.png" class="rounded-circle img-fluid" width="70">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Admin</h6>
                  <h4 class="card-title">User Admin</h4>
                </div>
              </div>
            </div>
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