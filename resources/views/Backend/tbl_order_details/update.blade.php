@extends('masterTwo')
@section('title', 'EDIT-ORDER-DETAIL')
@section('main')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $erorr)
                                        <li>{{$erorr}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('update_order_details', $edit_order_details->id)}}" method='POST'>
                            @csrf
                            <table >
                                <tr>
                                    <td>ID</td>
                                    <td><input type="number" value="{{$edit_order_details->id}}" name='nbrId' placeholder="Enter ID" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Dish ID</td>
                                    <td><input type="text" value="{{$edit_order_details->dish_id}}" name='txtDishId' placeholder="Enter Dish ID" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td><input type="number" value="{{$edit_order_details->quantity}}" name='nbrQuantity' class="form-control" placeholder="Enter Quantity"></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><input type="number" value="{{$edit_order_details->price}}" name='nbrPrice' placeholder="Enter Price" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Order Code</td>
                                    <td><input type="text" value="{{$edit_order_details->order_code}}" name='txtOrCode' placeholder="Enter Order Code" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-success w-100" value='Edit Order Details' style="color: white"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		@stop
