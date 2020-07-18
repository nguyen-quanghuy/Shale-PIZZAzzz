@extends('master')
@section('main')
 <h2 style="color: white; text-align: center;font-weight: bold; font-size: 35px">Shale-PIZZAAsss</h2>
          <br>

<h2 style="color: white; text-align: center;font-weight: bold; font-size: 35px">CHECK OUT</h2>
          <br>





    <div class="container">
      <div class="content">
          <div class="row">
            <div class="col-md-6" >
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Thông Tin Thanh Toán</h4>
                </div>
                <div class="card-body">


                  <p>Please select your check out:</p>

                  <label><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">Delivery Order (Applied for bill over 12$)</label><br>

                <label><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Carry Out Order (Receive your order at the store)</label><br>

                @if($message = Session::get('falseOne'))
                  <div class='alert alert-danger'>
                    <p>{{$message}}</p>
                  </div>
                @endif
                @if(Auth::check())
                <form method="POST" action="{{route('cart.pay', Auth::User()->id)}}">
                @csrf
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">First Name</label>
                                      <input type="text" class="form-control" name="txtFirstName">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Last Name</label>
                                      <input type="text" class="form-control" name="txtLastName">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Email</label>
                                      <input type="text" class="form-control" name="txtEmail">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Phone Number</label>
                                      <input type="text" class="form-control" name="nbrPhone">
                                    </div>
                                  </div>
                                </div>


                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">City</label>
                                      <input type="text" class="form-control" name="txtCity">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">District</label>
                                      <input type="text" class="form-control" name="txtDistrict">
                                    </div>
                                  </div>
                                </div>


                               <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">House Number, Building Name, Road Name</label>
                                      <input type="text" class="form-control" name="txtAddress">
                                    </div>
                                  </div>
                                </div>



                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Order Note</label>
                                      <div class="form-group">

                                        <textarea class="form-control" rows="5" name='txtCmt'></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                                </form>
                                @else
                                <form method="POST" action="{{route('cart.pays')}}">
                                  @csrf
                                  <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                          <div class="panel-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">First Name</label>
                                                        <input type="text" class="form-control" name="txtFirstName">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Last Name</label>
                                                        <input type="text" class="form-control" name="txtLastName">
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Email</label>
                                                        <input type="text" class="form-control" name="txtEmail">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">Phone Number</label>
                                                        <input type="text" class="form-control" name="nbrPhone">
                                                      </div>
                                                    </div>
                                                  </div>


                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">City</label>
                                                        <input type="text" class="form-control" name="txtCity">
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">District</label>
                                                        <input type="text" class="form-control" name="txtDistrict">
                                                      </div>
                                                    </div>
                                                  </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating">House Number, Building Name, Road Name</label>
                                                        <input type="text" class="form-control" name="txtAddress">
                                                      </div>
                                                    </div>
                                                  </div>



                                                  <div class="row">
                                                    <div class="col-md-12">
                                                      <div class="form-group">
                                                        <label>Order Note</label>
                                                        <div class="form-group">

                                                          <textarea class="form-control" rows="5" name='txtCmt'></textarea>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                                                  </form>
                                @endif
                                <div class="clearfix">


                                </div>
                        </div>
                    </div>
                  </div>
                      @if($message = Session::get('falseTwo'))
                      <div class='alert alert-danger'>
                        <p>{{$message}}</p>
                      </div>
                      @endif
                      @if(Auth::check())
                      <form method="POST" action="{{route('cart.payTwo', Auth::User()->id)}}">
                      @csrf
                      <div class="panel panel-default">
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                  <p>Choose One</p>
                                  <select class="form-control" name='CarryOrder'>
                                    <option selected>Choose a store to receive your order</option>
                                    <option value="Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh">1. Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh</option>
                                    <option value="Shale Pizza Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan">2. Shale Pizza Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan</option>
                                    <option value="Shale Pizza My Đinh 6 Đong Bat, Cau Giay">3. Shale Pizza My Đinh 6 Đong Bat, Cau Giay</option>
                                    <option value="Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai">4. Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai</option>
                                  </select><br><br>
                                  <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">First Name</label>
                                      <input type="text" class="form-control" name="FirstName">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Last Name</label>
                                      <input type="text" class="form-control" name="LastName">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Email</label>
                                      <input type="text" class="form-control" name="Email">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Phone Number</label>
                                      <input type="text" class="form-control" name="Phone">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Order Note</label>
                                      <div class="form-group">

                                        <textarea class="form-control" rows="5" name='Cmt'></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br><br>
                                  <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                              </div>
                          </div>
                      </div>
                      </form>
                    @else
                    <form method="POST" action="{{route('cart.payTwos')}}">
                      @csrf
                      <div class="panel panel-default">
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                  <p>Choose One</p>
                                  <select class="form-control" name='CarryOrder'>
                                    <option selected>Choose a store to receive your order</option>
                                    <option value="Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh">1. Shale Pizza Ngoc Khanh 107 D3 Ngoc Khanh, Ba Đinh</option>
                                    <option value="Shale Pizza Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan">2. Shale Pizza Nguyen Trai 4 Ngo 332 Nguyen Trai, Thanh Xuan</option>
                                    <option value="Shale Pizza My Đinh 6 Đong Bat, Cau Giay">3. Shale Pizza My Đinh 6 Đong Bat, Cau Giay</option>
                                    <option value="Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai">4. Pizza Express Hoang Mai 52 Kim Đong, Hoang Mai</option>
                                  </select><br><br>
                                  <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">First Name</label>
                                      <input type="text" class="form-control" name="FirstName">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Last Name</label>
                                      <input type="text" class="form-control" name="LastName">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Email</label>
                                      <input type="text" class="form-control" name="Email">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Phone Number</label>
                                      <input type="text" class="form-control" name="Phone">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Order Note</label>
                                      <div class="form-group">

                                        <textarea class="form-control" rows="5" name='Cmt'></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br><br>
                                  <h5><button type='submit' class="btn btn-primary">CHECK OUT</button></h5>
                              </div>
                          </div>
                      </div>
                      </form>
                      @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-profile">
                <div class="card-header card-header-primary" >
                  <h4 class="card-title">ORDER DETAIL</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray"></h6>
                  <div class="side-cart">
                    <div class="side-cart-title">
                    <a href="#cart" style="text-decoration: none"><h3>Cart</h3></a>
                      @foreach($cartContent as $select_cart)
                      <p><img src="{{asset('product/'.$select_cart->attributes->img)}}" alt="pizza" width="90px" height="90px"></p>
                      <p>{{$select_cart->name}}</p>
                      @endforeach
                    </div>
                    <strong>ID ORDER: {{$IDORDER}}</strong>
                    <div class="cart-checkout-mobile">
                      <div class="cart_icon">
                        <span class="fas fa-shopping-bag"></span>
                        <span class="amount">{{$cartTotalQuantity}}</span>
                      </div>
                      <div class="total-container">
                        <div class="total-wrap">
                          <div class="total-text">
                            <p>Total:</p>
                            <strong>{{$totalPrice}} $</strong>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                </div>
            </div>
          </div>
        </div>
      </div><br><br>
@stop
