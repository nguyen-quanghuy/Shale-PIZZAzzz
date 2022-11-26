@extends('masterTwo')
@section('title', 'INSERT-ORDER')
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
                        <form action="{{route('insert_order')}}" method='POST'>
                            @csrf
                            <table >
                                <!-- <tr>
                                    <td>ID</td>
                                    <td><input type="number" name='nbrId' placeholder="Enter ID" class="form-control"></td>
                                </tr> -->
                                <tr>
                                    <td>Date Create</td>
                                    <td><input type="datetime-local" name='txtDate' placeholder="Enter Date create" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>User ID</td>
                                    <td><input type="number" name='txtUserId' class="form-control" placeholder="Enter User ID"></td>
                                </tr>
                                <tr>
                                    <td>ID Detail</td>
                                    <td><input type="number" name='txtUserDetailId' class="form-control" placeholder="Enter User Detail Id"></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><input type="text" name='txtStatus' placeholder="Enter Status" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-primary w-100" value='Add New Order' style="color: white"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		@stop
