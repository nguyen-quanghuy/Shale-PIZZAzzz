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


<div class="clearfix">

<h1 style="text-align: center;color: white; font-weight: bold;">MENU</h1>
<br>
 <div class="clearfix">
      <div class="clearfix float-left w-50" id = "box1">
       <div class='col-md-12'>
          <div class="menu-pizzapage" style="width: 100%; margin-top: 0px">
              <img src="img-trangchu/P5.jpg" style="width: 100%;" >
              <button type="button" class="btn btn-primary"> <a href="{{route('pizza')}}" style="text-decoration-color: none; color: white">PIZZA</a></button>
          </div>
      </div>
    </div>
   <div class="h-75 w-50 float-right" id='slicebar-right'  align='center'>
      <div class='row col-md-12'>
        <div class="panel panel-success">
           <div class="menu-dessert" style="width: 100%; margin-top: 0px">
              <img src="img-dessert/1.jpg" style="width: 100%;" >
              <button type="button" class="btn btn-primary"> <a href="{{route('dessert')}}" style="text-decoration-color: none; color: white">DESSERTS</a></button>
            </div>
         </div>
    </div>
  </div>
 </div><br>


 <div class="clearfix">
      <div class="clearfix float-left w-50" id = "box1">
       <div class='col-md-12'>
         <div class="menu-garlic" style="width: 100%; margin-top: 20px" >
           <img src="garlicbreads/3.jpg" style="width: 100%; margin-top: 0px">
           <button type="button" class="btn btn-primary"><a href="{{route('galicbreads')}}" style="text-decoration-color: none; color: white">GARLIC BREADS</a></button>
         </div>
      </div>
    </div>
   <div class="h-75 w-50 float-right" id='slicebar-right'  align='center'>
      <div class='row col-md-12'>
        <div class="panel panel-success">
             <div class="menu-sandwiches" style="width: 100%; margin-top: 20px" >
              <img src="sanwitches/1.jpg" style="width: 100%; margin-top: 0px">
              <button type="button" class="btn btn-primary"><a href="{{route('pizzasandwiches')}}" style="text-decoration-color: none; color: white">PIZZA SANDWICHES</a></button>
             </div>
         </div>
    </div>
  </div>
 </div><br>

 <div class="clearfix">
      <div class="clearfix w-50 text-md-center" id = "box1">
       <div class='col-md-12'>
          <div class="menu-beverages" style="width: 100%; margin-top: 20px; margin-left: 50%">
              <img src="img-douong/1.jpg" style="width: 100%; margin-top: 0px" >
              <button type="button" class="btn btn-primary"><a href="{{route('beverages')}}" style="text-decoration-color: none; color: white">BEVERAGES</a></button>
            </div>
      </div>
    </div>
 </div><br>
</div>


</div><br><br>
@stop
