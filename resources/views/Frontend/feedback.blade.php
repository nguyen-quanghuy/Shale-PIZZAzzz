@extends('master')
@section('main')
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
	<h2 style="text-align: center;font-weight: bold; color: white;">FEEDBACK FORM</h2>
	<br>
  @if(Auth::check())
  <form action="{{route('postFeedBack', Auth::User()->id)}}" method='POST'>
      <div class="row">
		 <div class="col-sm-6">
		 	@csrf
		 <h4 align="center" class="font-italic" style="font-family: sans-serif; color: #fed400; margin-top: 10px" >Feedback to us your opinion</h4>

     <div class="form-group">
	   			<label class="font-italic" style="color: #fed400">Email: </label>
	  			<a href="#">{{Auth::User()->email}}</a>
			</div>

			<div class="form-group">
	   			<label class="font-italic" style="color: #fed400">Feedback here:</label>
	  			 <input type="text" name='txtFeedBack' class="form-control font-italic" style="height: 100px" placeholder="* Comment">
	  			 <br>
	  			 <button type="submit" class="btn btn-primary active" style = "position: absolute; right: 20px;">SEND INFORMATION</button>
			</div>
		 </div>
  </form>
  @else
  <form action="{{route('checkFeed')}}" method='POST'>
      <div class="row">
		 <div class="col-sm-6">
		 	@csrf
		 <h4 align="center" class="font-italic" style="font-family: sans-serif; color: #fed400; margin-top: 10px" >Feedback to us your opinion</h4>

     <div class="form-group">
	   			<label class="font-italic" style="color: #fed400">Email: </label>
      </div>

			<div class="form-group">
           <label class="font-italic" style="color: #fed400">Feedback here:</label>
           @if($message = Session::get('fail'))
              <div class="alert alert-success" role='alert'>
                <p>{{$message}}</p>
              </div>
          @endif
	  			 <input type="text" name='txtFeedBack' class="form-control font-italic" style="height: 100px" placeholder="* Comment">
	  			 <br>
	  			 <button type="submit" class="btn btn-primary active" style = "position: absolute; right: 20px;" name='btnFeed'>SEND INFORMATION</button>
			</div>
		 </div>
  </form>
    @endif
		  <div class="col-sm-6">
		  <!-- <img src="P8.jpg" width="100%"> -->
		  <div style="width:660px; height: 442px; overflow-y: scroll; background-image:url(css/1.jpg)">
      @foreach($feedBack as $select_feed)
        <h4><img src="css/contacts.png" alt="user" width="40px" height="40px"> {{$select_feed->name}}</h4>
        <p style="margin-left: 20px"> → {{$select_feed->feed_back}}</p>
      @endforeach
      </div>
		</div>
	</div>
</div>
@stop
