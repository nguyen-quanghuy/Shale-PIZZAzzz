@extends('master')
@section('main')
 <div class="clearfix">
	    <div class="clearfix float-left w-75" id = "box1">
		   <div class='col-md-12'>
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			  </ul>

			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="img-trangchu/P2.jpg" alt="P3" width="100%">
				</div>
				<div class="carousel-item">
				  <img src="img-trangchu/P1.jpg" alt="P2" width="100%" >
				</div>
				<div class="carousel-item">
				  <img src="img-trangchu/P3.jpg" alt="P1" width="100%" >
				</div>
			  </div>
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			 </div>
		  </div>
		</div>
    <div class="h-75 w-25 float-right" id='slicebar-right'  align='center'>
			<div class='row col-md-12'>
			  <div class="panel panel-success">
			  	 <div class="discount" style="width: 100%; margin-top: 0px">
		       		<img src="img-trangchu/P5.jpg" style="width: 100%;" >
		       		<button type="button" class="btn btn-primary"> <a href="{{route('weekendspecial')}}" style="text-decoration-color: none; color: white">WEEKEND SPECIAL</a></button>
		       	 </div>
		         <div class="pizzamenu" style="width: 100%; margin-top: 20px" >
		       		<img src="img-trangchu/P7.jpg" style="width: 100%; margin-top: 0px">
		       		<button type="button" class="btn btn-primary"><a href="{{route('combooffers')}}" style="text-decoration-color: none; color: white">COMBO OFFERS</a></button>
		       	 </div>
		        <div class="gallery" style="width: 100%; margin-top: 20px">
		       		<img src="img-trangchu/P6.jpg" style="width: 100%; margin-top: 0px" >
		       		<button type="button" class="btn btn-primary"><a href="{{route('f.gallery')}}" style="text-decoration-color: none; color: white">GALLERY</a></button>
		       	</div>
		     </div>
		</div>
	</div>
 </div><br>
 @stop





