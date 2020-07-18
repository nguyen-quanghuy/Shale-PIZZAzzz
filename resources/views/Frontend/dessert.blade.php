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


 <h2 style="color: white; text-align: center;font-weight: bold; font-size: 35px"><img src="css/logo.png" style="width: 120px"> Shale-PIZZAAsss</h2> <br><br>


<div class="text-center" id='menuthucdon'>
<ul>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{route('pizza')}}" target="_self" style="color: white">PIZZA</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{route('galicbreads')}}" target="_self" style="color: white">GARLIC BREADS</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{route('pizzasandwiches')}}" target="_self" style="color: white">PIZZA SANDWICHES</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link active1" href="{{route('dessert')}}" target="_self" style="color: white">DESSERTS</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{route('beverages')}}" target="_self" style="color: white">BEVERAGES</a></li>
      </ul>
  </div><br>

            <div class="clearfix">
              <h2 style="text-align: center; color: white; font-weight: bold;margin-top: 25px">BEST DESSERT 2020</h2>


              <div class="container">
                <div class="menu-header" >
                <h3 style="margin-bottom: 0px">FAVORITE</h3>
                  <a href="#Beverage" style="margin-left: 980px; text-decoration: none">Have {{count($menuDessert)}} products</a>
                 </div><br>
               <!-- <div class="row">
                 <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white;">
                        <img class="img-round" style="width: 100%;" src="img-dessert/1.jpg" >
                          <div class="panel-body">
                          <h5 style="margin-top: 30px">DESSERT RECIPES</h5>
                          <p style="font-size: 30px">10$</p>
                          </div>
                       <div class="panel-footer">
                       <button type="button" id="addcart" class="btn btn-primary"  data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-shopping-cart"><img src="css/cart.png" style="width: 30px"></span>&ensp;ADD TO CART</button>
                       </div>
                   </div>
                 </div>

                 <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white">
                        <img class="img-round" style="width: 100%;" src="img-dessert/2.jpg" >
                          <div class="panel-body">
                          <h5 style="margin-top: 30px">CHOCOLATE CAKE </h5>
                          <p style="font-size: 30px">1.5$</p>
                          </div>
                       <div class="panel-footer">
                       <button type="button" id="addcart" class="btn btn-primary"  data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-shopping-cart"><img src="css/cart.png" style="width: 30px"></span>&ensp;ADD TO CART</button>
                       </div>
                   </div>
                 </div>

                 <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white">
                        <img class="img-round" style="width: 100%;" src="img-dessert/3.jpg" >
                          <div class="panel-body">
                          <h5 style="margin-top: 30px">CARLOTA</h5>
                          <p style="font-size: 30px">2$</p>
                          </div>
                       <div class="panel-footer">
                       <button type="button" id="addcart" class="btn btn-primary"  data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-shopping-cart"><img src="css/cart.png" style="width: 30px"></span>&ensp;ADD TO CART</button>
                       </div>
                   </div>
                 </div>
              </div><br><br><br> -->


              <div class="row">
                 <!-- <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white;">
                        <img class="img-round" style="width: 100%;" src="img-dessert/4.jpg" >
                          <div class="panel-body">
                          <h5 style="margin-top: 30px">DESSERT NACHOS</h5>
                          <p style="font-size: 30px">2$</p>
                          </div>
                       <div class="panel-footer">
                       <button type="button" id="addcart" class="btn btn-primary"  data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-shopping-cart"><img src="css/cart.png" style="width: 30px"></span>&ensp;ADD TO CART</button>
                       </div>
                   </div>
                 </div>

                 <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white">
                        <img class="img-round" style="width: 100%;" src="img-dessert/5.jpg" >
                          <div class="panel-body">
                          <h5 style="margin-top: 30px">BANANAS FOSTER</h5>
                          <p style="font-size: 30px">2$</p>
                          </div>
                       <div class="panel-footer">
                       <button type="button" id="addcart" class="btn btn-primary"  data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-shopping-cart"><img src="css/cart.png" style="width: 30px"></span>&ensp;ADD TO CART</button>
                       </div>
                   </div>
                 </div> -->
                 @foreach($menuDessert as $select_dessert)
                 <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white">
                        <img class="img-round" style="width: 100%; height: 233px" src="{{asset('product/'.$select_dessert->prd_img)}}" >
                          <div class="panel-body">
                          <h3 style="height: 65px">{{$select_dessert->dish_name}}</h3>
                          <p style="height: 65px">{{$select_dessert->customer_reviews}}</p>
                          <strong style="font-size: 25px">{{$select_dessert->price}}$</strong>
                          </div>
                       <div class="panel-footer">
                       <a href="{{route('cart.add', $select_dessert->id)}}" id="addcart" class="btn btn-primary"><img src="css/cart.png" style="width: 20px">&ensp;ADD TO CART</a>
                       </div>
                   </div>
                 </div>
                 @endforeach
                  <div class="col-sm-4 d-flex align-item-end" style="margin-top: 50px">{{$menuDessert->links()}}</div>
              </div>
            </div>
            </div><br><br><br>
          </div>
@stop
