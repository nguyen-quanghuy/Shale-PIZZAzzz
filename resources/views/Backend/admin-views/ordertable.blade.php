@extends('masterTwo')
@section('title', 'ORDER-TABLE')
@section('main')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" style="margin-top: 20px">
                                @if($message = Session::get('success_order'))
                                    <div class="alert alert-success" role="alert">
                                        <p>{{$message}}</p>
                                    </div>
                                @endif
                                <p>Have {{count($index_order)}} records</p>
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Order Table</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-center text-primary">
                                                    <th>
                                                    ID
                                                    </th>
                                                    <th>
                                                    User ID
                                                    </th>
                                                    <th>
                                                    ID Detail
                                                    </th>
                                                    <th>
                                                    Status
                                                    </th>
                                                    <th>
                                                    Action
                                                    </th>
                                                </thead>
                                                <tbody class="text-center">
                                                    @foreach($index_order as $select_order)
                                                        <tr>
                                                        <td>
                                                            {{$select_order->id}}
                                                        </td>
                                                        <td>
                                                            {{$select_order->id_user}}
                                                        </td>
                                                        <td>
                                                            {{$select_order->id_details}}
                                                        </td>
                                                        <td>
                                                            {{$select_order->status}}
                                                        </td>
                                                        <td>
                                                            <a href="{{route('edit_order', $select_order->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Edit</a>
                                                            <a href="{{route('delete_order', $select_order->id)}}" class="btn btn-danger" style="margin-left: 0px; width: 60px; color: white">Del</a>
                                                        </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <a href="{{route('create_order')}}" class="btn btn-primary" style="margin-left: 0px; color: white">+ Add new Order</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 20px">
                                @if($message = Session::get('success_delivery'))
                                    <div class="alert alert-success" role="alert">
                                        <p>{{$message}}</p>
                                    </div>
                                @endif
                                <p>Have {{count($index_delivery)}} records</p>
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Delivery Table</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-center text-primary">
                                                    <th>
                                                    ID
                                                    </th>
                                                    <th>
                                                    User ID
                                                    </th>
                                                    <th>
                                                    Phone Number
                                                    </th>
                                                    <th>
                                                    Store Name
                                                    </th>
                                                    <th>
                                                    Customer Address
                                                    </th>
                                                    <th>
                                                    Order Code
                                                    </th>
                                                    <th>
                                                    Action
                                                    </th>
                                                </thead>
                                                <tbody class="text-center">
                                                    @foreach($index_delivery as $select_delivery)
                                                    <tr>
                                                    <td>
                                                        {{$select_delivery->id}}
                                                    </td>
                                                    <td>
                                                        {{$select_delivery->id_user}}
                                                    </td>
                                                    <td>
                                                        {{$select_delivery->phone_numbers}}
                                                    </td>
                                                    <td>
                                                        {{$select_delivery->store_name}}
                                                    </td>
                                                    <td>
                                                        {{$select_delivery->customer_address}}
                                                    </td>
                                                    <td>
                                                        {{$select_delivery->order_code}}
                                                    </td>
                                                    <td>
                                                        <a  href = "{{route('edit_delivery', $select_delivery->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Edit</a>
                                                        <a  href = "{{route('delete_delivery', $select_delivery->id)}}" class="btn btn-danger" style="margin-left: 0px; width: 60px; color: white">Del</a>
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <a href="{{route('create_delivery')}}" class="btn btn-primary" style="margin-left: 0px; color: white">+ Add new Delivery</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 20px">
                                @if($message = Session::get('success_order_details'))
                                    <div class="alert alert-success" role="alert">
                                        <p>{{$message}}</p>
                                    </div>
                                @endif
                                <p>Have {{count($index_order_details)}} records</p>
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Order Detail Table</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-center text-primary">
                                                    <th>
                                                    ID
                                                    </th>
                                                    <th>
                                                    Product Name
                                                    </th>
                                                    <th>
                                                    Quantity
                                                    </th>
                                                    <th>
                                                    Total Price
                                                    </th>
                                                    <th>
                                                    Action
                                                    </th>
                                                </thead>
                                                <tbody class="text-center">
                                                @foreach($index_order_details as $select_order_details)
                                                    <tr>
                                                    <td>
                                                        {{($select_order_details->id)}}
                                                    </td>
                                                    <td>
                                                        {{($select_order_details->prd_name)}}
                                                    </td>
                                                    <td>
                                                        {{($select_order_details->quantity)}}
                                                    </td>
                                                    <td>
                                                        {{($select_order_details->total_price)}}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('edit_order_details', $select_order_details->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px; color: white">Edit</a>
                                                        <a href="{{route('delete_order_details', $select_order_details->id )}}" class="btn btn-danger" style="margin-left: 0px; width: 60px; color: white">Del</a>
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <a href="{{route('create_order_details')}}" class="btn btn-primary" style="margin-left: 0px; color: white">+ Add new Order Detail</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @stop
