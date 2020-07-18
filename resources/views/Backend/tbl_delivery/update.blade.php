@extends('masterTwo')
@section('title', 'EDIT-DELIVERY')
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
                        <form action="{{route('update_delivery', $edit_delivery->id)}}" method='POST'>
                            @csrf
                            <table >
                                <tr>
                                    <td>ID</td>
                                    <td><input type="number" value='{{$edit_delivery->id}}' name='nbrId' placeholder="Enter ID" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Customer Id</td>
                                    <td><input type="number" value='{{$edit_delivery->id_user}}' name='nbrCusId' placeholder="Enter Customer Id" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Phone Numbers</td>
                                    <td><input type="number" value='{{$edit_delivery->phone_numbers}}' name='nbrPhone' class="form-control" placeholder="Enter Phone Numbers"></td>
                                </tr>
                                <tr>
                                    <td>Store Name</td>
                                    <td><input type="text" value='{{$edit_delivery->store_name}}' name='txtStoreName' placeholder="Enter Store Name" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Customer Address</td>
                                    <td><input type="text" value='{{$edit_delivery->customer_address}}' name='txtCusAddress' placeholder="Enter Customer Address" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Order Code</td>
                                    <td><input type="text" value='{{$edit_delivery->order_code}}' name='txtOrCode' placeholder="Enter Order Code" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-success w-100" value='EDIT' style="color: white"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	@stop
