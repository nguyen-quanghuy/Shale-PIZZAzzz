
@extends('masterTwo')
@section('title', 'INSERT-PRODUCT')
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
                        <form action="{{route('insert_product')}}" method='POST' enctype="multipart/form-data">
                            @csrf
                            <table >
                                <tr>
                                    <td>Category ID</td>
                                    <td><input type="number" name='nbrCatId' placeholder="Enter Category ID" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Menu</td>
                                    <td>
                                        <select name="txtMenu" id="txtMenu" class="form-control">
                                            <option value="pizza">pizza</option>
                                            <option value="preminum">preminum</option>
                                            <option value="garlic breads">garlic breads</option>
                                            <option value="pizza sandwiches">pizza sandwiches</option>
                                            <option value="desserts">desserts</option>
                                            <option value="beverages">beverages</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Product Image</td>
                                    <td><input type="file" name='txtPrdImg' class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Dish Name</td>
                                    <td><input type="text" name='txtDishName' class="form-control" placeholder="Enter Dish Name"></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><input type="number" name='nbrPrice' placeholder="Enter Price" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Sold</td>
                                    <td><input type="number" name='nbrSold' placeholder="Enter Sold" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Inventory</td>
                                    <td><input type="number" name='nbrInven' placeholder="Enter Inventory" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Customer ReViews</td>
                                    <td><input type="text" name='txtCusReview' placeholder="Enter Review" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-primary w-100" value='Add New Product' style="color: white"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		@stop
