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
@stop
