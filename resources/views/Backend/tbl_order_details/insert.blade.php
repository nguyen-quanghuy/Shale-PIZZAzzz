@extends('masterTwo')
@section('title', 'INSERT-ORDER-DETAIL')
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
                        <form action="{{route('insert_order_details')}}" method='POST'>
                            @csrf
                            <table >
                                <tr>
                                    <td>ID</td>
                                    <td><input type="number" name='nbrId' placeholder="Enter ID" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Dish ID</td>
                                    <td><input type="text" name='txtDishId' placeholder="Enter Dish ID" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td><input type="number" name='nbrQuantity' class="form-control" placeholder="Enter Quantity"></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><input type="number" name='nbrPrice' placeholder="Enter Price" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Order Code</td>
                                    <td><input type="text" name='txtOrCode' placeholder="Enter Order Code" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-primary w-100" value='Add New Order Detail' style="color: white"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		@stop
