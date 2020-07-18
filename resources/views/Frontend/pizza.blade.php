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


 <h2 style="color: white; text-align: center;font-weight: bold; font-size: 35px"><img src="css/logo.png" style="width: 120px"> Shale-PIZZAAsss</h2>
          <br>


<div class="text-center" id='menuthucdon'>
      <ul>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link active1" href="{{route('pizza')}}" target="_self" style="color: white">PIZZA</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{route('galicbreads')}}" target="_self" style="color: white">GARLIC BREADS</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{route('pizzasandwiches')}}" target="_self" style="color: white">PIZZA SANDWICHES</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{route('dessert')}}" target="_self" style="color: white">DESSERTS</a></li>
          <li class="nav-item" id= "pizzaitem"><a class="nav-link" href="{{route('beverages')}}" target="_self" style="color: white">BEVERAGES</a></li>
      </ul>
  </div><br>

      <div class="clearfix">
          <h2 style="text-align: center; color: white; font-weight: bold;">BEST PIZZA 2020</h2>
              <div class="container">
                <div class="menu-header" >
                  <h3>FAVORITE</h3>
                  <ul>
                    <li>
                      <img src="css/big.png">
                      <span class="price-large">
                        Large:
                        <strong>15.00$</strong>
                      </span>
                    </li>
                    <li>
                      <img src="css/big.png" >
                      <span class="price-large">
                        Medium:
                        <strong>12.00$</strong>
                      </span>
                    </li>
                    <li>
                      <img src="css/big.png">
                      <span class="price-large">
                        Small:
                        <strong>8.00$</strong>
                      </span>
                    </li>
                    <li>
                      <span>Have {{count($menuPizza)}} products</span>
                    </li>
                  </ul>

                 </div><br>

               <div class="row">
                 @foreach($menuPizza as $select_pizza)
                 <div class="col-sm-4">
                   <div class="panel text-center" id="item" style="color: white;">
                        <img class="img-round" style="width: 100%;" src="{{asset('product/'.$select_pizza->prd_img)}}" >
                          <div class="panel-body">
                          <h3>{{$select_pizza->dish_name}}</h3>
                          <strong>{{$select_pizza->price}}$</strong>
                          <p>{{$select_pizza->customer_reviews}}</p>
                          </div>
                       <div class="panel-footer">
                          <a href="{{route('cart.add', $select_pizza->id)}}" id="addcart" class="btn btn-primary"><img src="css/cart.png" style="width: 20px">&ensp;ADD TO CART</a>
                       </div>
                   </div>
                 </div>
                  @endforeach
                  <div class="row">
                    <div class="col-sm-4">{{$menuPizza->links()}}</div>
                  </div>
                 <!-- <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white">
                        <img class="img-round" style="width: 100%;" src="img-menu/V2.png" >
                          <div class="panel-body">
                          <h3>PRIME BEEF</h3>
                          <p>Pepper sauce, Mozzarella cheese, Cheddar cheese, Shrimp, Squid, Pineapple, Onion</p>
                          </div>
                       <div class="panel-footer">
                       <button type="button" id="addcart" class="btn btn-primary"  data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-shopping-cart"><img src="css/cart.png" style="width: 30px"></span>&ensp;ADD TO CART</button>
                       </div>
                   </div>
                 </div>

                 <div class="col-sm-4 h-75">
                   <div class="panel text-center" id="item" style="color: white">
                        <img class="img-round" style="width: 100%;" src="img-menu/V3.png" >
                          <div class="panel-body">
                          <h3>SINGAPORE SEAFOOD</h3>
                          <p>Singapore style hot sauce, Mozzarella cheese, Shrimp, Crab Meat, Onion</p>
                          </div>
                       <div class="panel-footer">
                       <button type="button" id="addcart" class="btn btn-primary"  data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-shopping-cart"><img src="css/cart.png" style="width: 30px"></span>&ensp;ADD TO CART</button>
                       </div>
                   </div>
                 </div>
              </div>-->

            </div> <br><br><br>



              <div class="container">
                <div class="menu-header">
                  <h3>PREMINUM</h3>
                  <ul>
                    <li>
                      <img src="css/big.png">
                      <span class="price-large">
                        Large:
                        <strong>15.00$</strong>
                      </span>
                    </li>
                    <li>
                      <img src="css/big.png" class=>
                      <span class="price-large">
                        Medium:
                        <strong>12.00$</strong>
                      </span>
                    </li>
                    <li>
                      <img src="css/big.png">
                      <span class="price-large">
                        Small:
                        <strong>8.00$</strong>
                      </span>
                    </li>
                    <li>
                      <span>Have {{count($menuPreminum)}} products</span>
                    </li>
                  </ul>
                 </div><br>

               <div class="row">
                 @foreach($menuPreminum as $select_Preminum)
                 <div class="col-sm-4 h-75" id = "picpizza">
                   <div class="panel text-center" id="item" style="color: white">
                        <img class="img-round" style="width: 100%; height: 350px" src="{{asset('product/'.$select_Preminum->prd_img)}}" >
                          <div class="panel-body">
                          <h3>{{$select_Preminum->dish_name}}</h3>
                          <p>{{$select_Preminum->customer_reviews}}</p>
                          <strong>{{$select_Preminum->price}}$</strong>
                          </div>
                       <div class="panel-footer">
                       <a href="{{route('cart.add', $select_Preminum->id)}}" id="addcart" class="btn btn-primary"><img src="css/cart.png" style="width: 18px">&ensp;ADD TO CART</a>
                       </div>
                   </div>
                 </div>
                 @endforeach
                 <div class="row">
                    <div class="col-sm-4">{{$menuPreminum->links()}}</div>
                  </div>
                 <!-- <div class="col-sm-4 h-75" id = "picpizza">
                   <div class="panel text-center" id="item" style="color: white">
                        <img class="img-round" style="width: 100%;" src="img-menu/V5.png" >
                          <div class="panel-body">
                          <h3>PEPPERONI FEAST</h3>
                          <p>Mozzarella cheese, Pizza Sauce, Pepperoni</p>
                          </div>
                       <div class="panel-footer">
                       <button type="button" id="addcart" class="btn btn-primary"  data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-shopping-cart"><img src="css/cart.png" style="width: 30px"></span>&ensp;ADD TO CART</button>
                       </div>
                   </div>
                 </div>

                 <div class="col-sm-4 h-75" id = "picpizza">
                   <div class="panel text-center" id="item" style="color: white">
                        <img class="img-round" style="width: 100%;" src="img-menu/V6.png" >
                          <div class="panel-body">
                          <h3>SEAFOOD DELIGHT</h3>
                          <p>Shrimp, Squid, Crab surimi, Pizza Sauce, Onion</p>
                          </div>
                       <div class="panel-footer">
                       <button type="button" id="addcart" class="btn btn-primary"  data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-shopping-cart"><img src="css/cart.png" style="width: 30px"></span>&ensp;ADD TO CART</button>
                       </div>
                   </div>
                 </div> -->
              </div>
            </div>

            </div><br><br><br>


            <div class="modal fade" id="myModal1" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">PIZZAMIN SEA</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V1.png" >
                                <br>
                                <b><h2 align="center" style="color: white">{price}</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Mozzarella cheese, Onion, Shrimp, Squid, Crab Meat, Mayonnaise, Basil</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills1">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills2">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->



            <div class="modal fade" id="myModal2" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">PRIME BEEF</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V2.png" >
                                <br>
                                <b><h2 align="center" style="color: white">{price}</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Pepper sauce, Mozzarella cheese, Cheddar cheese, Shrimp, Squid, Pineapple, Onion</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills3">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills4">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->


            <div class="modal fade" id="myModal3" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">SINGAPORE SEAFOOD</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V3.png" >
                                <br>
                                <b><h2 align="center" style="color: white">{price}</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Singapore style hot sauce, Mozzarella cheese, Shrimp, Crab Meat, Onion</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills3">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills4">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->


            <div class="modal fade" id="myModal4" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">TERIYAKI CHICKEN</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V3.png" >
                                <br>
                                <b><h2 align="center" style="color: white">15$</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Mozzarella cheese, Onion, Mushroom</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills3">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills4">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->

            <div class="modal fade" id="myModal5" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">PEPPERONI FEAST</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V3.png" >
                                <br>
                                <b><h2 align="center" style="color: white">15$</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Mozzarella cheese, Pizza Sauce, Pepperoni</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills3">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills4">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->

            <div class="modal fade" id="myModal6" role="dialog" style="color: #04a2e4">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content" style="background: url(css/nen1.jpg);">
                  <!--   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <div class="modal-body">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4">

                                <h4 class="modal-title" align="center">SEAFOOD DELIGHT</h4>
                                <img class="img-round" style="width: 100%;" src="img-menu/V3.png" >
                                <br>
                                <b><h2 align="center" style="color: white">15$</h2></b>
                              </div>
                              <div class="col-lg-8">
                                <p>Shrimp, Squid, Crab surimi, Pizza Sauce, Onion</p>
                                <hr>
                                <select style="width: 40%;height: 40px;margin-right: 10%;" id="ddlSkills3">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <select style="width: 40%;height: 40px;" id="ddlSkills4">
                                    <option selected>Size</option>
                                    <option value="1">Large</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Small</option>
                                </select>
                                <hr>
                                <button type="button" id="startoder" class="btn btn-danger" style="width: 92%;height: 50px;margin-right: 10%;">START ORDER</button>

                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                       <div id="divResult"></div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->
 </div>

 </div>
@stop
