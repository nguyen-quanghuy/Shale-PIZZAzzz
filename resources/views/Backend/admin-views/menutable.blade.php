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
	<title>Menu Table</title>
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
            </div><br>
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
              @if($message = Session::get('success_category'))
                <div class="alert alert-success" role="alert">
                  <p>{{$message}}</p>
                </div>
              @endif
              <p>Have {{count($index_category)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Categories Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-center">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Categories Name
                        </th>
                        <th>
                          Categories Image
                        </th>
                        <th>
                          Description
                        </th>
                        <th colspan=2>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        @foreach($index_category as $select_category)
                          <tr>
                            <td>  
                              {{$select_category->id}}
                            </td>
                            <td>
                              {{$select_category->cat_name}}
                            </td>
                            <td>
                              <img src="{{asset('category/'.$select_category->cat_image)}}" alt="error" width="200px" height="200px">
                            </td>  
                            <td>
                              {{$select_category->cat_description}}
                            </td>
                            <td><a  href="{{route('edit_category', $select_category->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Edit</a></td>
                            <td><a  href="{{route('delete_category', $select_category->id )}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Del</a></td>
                          </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create_category')}}" class="btn btn-primary" style="margin-left: 0px; color: white">Add new Category</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-md-12" style="margin-top: 20px">
              @if($message = Session::get('success_delivery'))
                  <div class="alert alert-success" role="alert">
                      <p>{{$message}}</p>
                  </div>
              @endif
              <p>Have {{count($index_delivery)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Delivery Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Customer ID
                        </th>
                        <th>
                          Phone Number
                        </th>
                        <th>
                          Store Name
                        </th>
                        <th>
                          Customer Address
                        </th>
                        <th>
                          Order Code
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        @foreach($index_delivery as $select_delivery)
                        <tr>
                          <td>
                            {{$select_delivery->id}}
                          </td>
                          <td>
                          {{$select_delivery->customer_id}}
                          </td>
                          <td>
                          {{$select_delivery->phone_numbers}}
                          </td>
                          <td>
                          {{$select_delivery->store_name}}
                          </td>
                          <td>
                          {{$select_delivery->customer_address}}
                          </td>
                          <td>
                          {{$select_delivery->order_code}}
                          </td>
                          <td>
                            <a  href = "{{route('edit_delivery', $select_delivery->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Edit</a>
                            <a  href = "{{route('delete_delivery', $select_delivery->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Del</a>
                          </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create_delivery')}}" class="btn btn-primary" style="margin-left: 0px; color: white">Add new Delivery</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
				
		<div class="col-md-12" style="margin-top: 20px">
              @if($message = Session::get('success_order'))
                  <div class="alert alert-success" role="alert">
                      <p>{{$message}}</p>
                  </div>
              @endif
              <p>Have {{count($index_order)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Order Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Date Create
                        </th>
                        <th>
                          User ID
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($index_order as $select_order)
                        <tr>
                          <td>
                            {{$select_order->id}}
                          </td>
                          <td>
                          {{$select_order->date_create}}
                          </td>
                          <td>
                          {{$select_order->user_id}}
                          </td>
                          <td>
                          {{$select_order->status}}
                          </td>
                          <td>
                            <a href="{{route('edit_order', $select_order->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Edit</a>
                            <a href="{{route('delete_order', $select_order->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Del</a>
                          </td>
                        </tr>
                      @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create_order')}}" class="btn btn-primary" style="margin-left: 0px; color: white">Add new Order</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div><br>
		
		 <div class="col-md-12" style="margin-top: 20px">
              @if($message = Session::get('success_order_details'))
                <div class="alert alert-success" role="alert">
                    <p>{{$message}}</p>
                </div>
              @endif
              <p>Have {{count($index_order_details)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Order Detail Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Dish ID
                        </th>
                        <th>
                          Quantity
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Order Code
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($index_order_details as $select_order_details)
                        <tr>
                          <td>
                            {{($select_order_details->id)}}
                          </td>
                          <td>
                          {{($select_order_details->dish_id)}}
                          </td>
                          <td>
                          {{($select_order_details->quantity)}}
                          </td>
                          <td>
                          {{($select_order_details->price)}}
                          </td>
                          <td>
                          {{($select_order_details->order_code)}}
                          </td>
                           <td>
                            <a href="{{route('edit_order_details', $select_order_details->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Edit</a>
                            <a href="{{route('delete_order_details', $select_order_details->id )}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Del</a>
                          </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create_order_details')}}" class="btn btn-primary" style="margin-left: 0px; color: white">Add new Order Detail</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>

           <div class="col-md-12" style="margin-top: 20px">
              @if($message = Session::get('success_product'))
                  <div class="alert alert-success" role="alert">
                    <p>{{$message}}</p>
                  </div>
              @endif
              <p>Have {{count($index_product)}} record</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Product Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Categories ID
                        </th>
                        <th>
                          Menu
                        </th>
                        <th>
                          Image Product
                        </th>
                        <th>
                          Dish Name
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Sold
                        </th>
                        <th>
                          Inventory
                        </th>
                        <th>
                          Customer Reviews
                        </th>
                        <th colspan=2>
                          Action
                        </th>

                      </thead>
                      <tbody>
                      @foreach($index_product as $select_product)
                        <tr>
                          <td>
                            {{$select_product->id}}
                          </td>
                          <td>
                            {{$select_product->cat_id }}
                          </td>
                          <td>
                            {{$select_product->menu }}
                          </td>
                          <td>
                            <img src="{{asset('product/'.$select_product->prd_img)}}" alt="welcome" width="200px" height="200px">
                          </td>
                          <td>
                            {{$select_product->dish_name}}
                          </td>
                          <td>
                            {{$select_product->price}}
                          </td>
                          <td>
                            {{$select_product->sold}}
                          </td>
                          <td>
                            {{$select_product->inventory}}
                          </td>
                          <td>
                            {{$select_product->customer_reviews}}
                          </td>
                          <td>
                            <a href="{{route('edit_product', $select_product->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Edit</a>
                          </td>
                          <td>
                            <a href="{{route('delete_product', $select_product->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Del</a>
                          </td>
                        </tr>
                      @endforeach
                      <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create_product')}}" class="btn btn-primary" style="margin-left: 0px; color: white">Add new Product</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
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