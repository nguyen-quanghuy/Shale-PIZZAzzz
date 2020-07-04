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
	<title>User Table</title>
</head>
<body>
	<nav class="navbar bg-dark sticky-top">	
	    <a href="#" class="navbar-brand" >
			<img src="../style/logo.png" width="90px" style="display: inline-block;"><h4 style="display: inline-block;color: white">Shale-Pizza</h4>
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
            </div><br>
        <div class="container-fluid">
          <div class="row">
          
			<div class="col-md-12">
              @if($message = Session::get('success'))
                  <div class='alert alert-success' role='alert'>
                      <p>{{$message}}</p>
                  </div>
              @endif
              <p>Have {{count($index_admin)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Admin Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-center">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Permission
                        </th>
                        <th>
                          User Name
                        </th>
                        <th>
                          Password
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($index_admin as $select_admin)
                        <tr>
                          <td>
                            {{$select_admin->id}}
                          </td>
                          <td>
                          {{$select_admin->permission}}
                          </td>
                          <td>
                          {{$select_admin->user_name}}
                          </td>
                          <td>
                          {{$select_admin->password}}
                          </td>
                          <td>
                            <a  href="{{route('edit', $select_admin->id)}}" class="btn btn-primary" style="margin-left: 0px;width: 60px; color: white">Edit</a>
                            <a  href="{{route('delete', $select_admin->id)}}" class="btn btn-primary" style="margin-left: 0px;width: 60px; color: white">Del</a>
                          </td>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create')}}" class="btn btn-primary" style="margin-left: 0px; color: white">Add new ID</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="col-md-12">
            <br>
              @if($message = Session::get('success_user'))
                  <div class="alert alert-success" role="alert">
                    <p>{{$message}}</p>
                  </div>
              @endif
              <p>Have {{count($index_user)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">User Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-center">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Password
                        </th>
                        <th>
                          Phone Number
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($index_user as $select_user)
                        <tr>
                          <td>
                            {{$select_user->id}}
                          </td>
                          <td>
                            {{$select_user->name}}
                          </td>
                          <td>
                          {{$select_user->password}}
                          </td>
                          <td>
                          {{$select_user->phone_number}}
                          </td>
                          <td>
                          {{$select_user->email}}
                          </td>
                          <td>
                            <a href="{{route('edit_user', $select_user->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px">Edit</a>
                            <a href="{{route('delete_user', $select_user->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px" id='btnDelete'>Del</a>
                          </td>
                        </tr>
                        @endforeach
                         <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create_user')}}" type="submit" class="btn btn-primary" style="margin-left: 0px;">Add new ID</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div><br>


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