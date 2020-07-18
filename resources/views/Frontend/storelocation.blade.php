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

<div class="text-center">
<h3 style="color: white;font-weight: bold;">CONTACT US</h3><br>
</div>


<div class="container-fluid" >
  <div class="row">
  <div class='w-50' style="color: white;position: absolute; right: 0px">
    <div style="height: 480px;margin-left: 0px;background: #033a56">
   <h3 style="font-weight: bold;margin-left: 20px;">Shale Store Location</h3>
   <p style="margin:20px 0px 0px 20px">
    To order Pizza, please to contact with phone number: 024.36.888.777<br>
    To feedback quality of service, plesea to contact with phone number: 0989.139.565<br>
    Email: shalepizza@gmail.com</p><br>
    <h5 style="font-weight: bold;margin-left: 20px">Shale Pizza Store System
    </h5>
    <p style="margin-left: 20px">
      1. Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh<br>
      2. Shale Pizza Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan<br>
      3. Shale Pizza My Đinh 6 Đong Bat, Cau Giay<br>
      4. Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai<br>
    </p>
   </div>
  </div>
   <div class='w-50'>
      <iframe src="https://www.google.com/maps/d/embed?mid=14891zw5gSgD0RmeehrFN_DuDRL6pXPXo" width="640" height="480"></iframe>
     </div>
  </div>
</div>
@stop
