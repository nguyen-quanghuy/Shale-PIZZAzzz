@extends('masterTwo')
@section('title', 'EDIT-ORDER')
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
                        <form action="{{route('update_order', $edit_order->id)}}" method='POST'>
                            @csrf
                            <table >
                                <tr>
                                    <td>Status</td>
                                    <td><input type="text" value="{{$edit_order->status}}" name='txtStatus' placeholder="Enter Status" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-success w-100" value='Edit Order' style="color: white"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		@stop
