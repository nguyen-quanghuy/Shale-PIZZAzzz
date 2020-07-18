@extends('masterTwo')
@section('title', 'EDIT-COMBO')
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
                        <form action="{{route('update_combo', $edit_combo->id)}}" method='POST' enctype="multipart/form-data">
                            @csrf
                            <table >
                                <tr>
                                    <td>ID</td>
                                    <td><input type="number" value="{{$edit_combo->id}}" name='txtId' placeholder="Enter ID" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Combo Image</td>
                                    <td><input type="file" name='txtComboImg' placeholder="Enter Dish ID" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>
                                        <input type='text' value="{{$edit_combo->description}}" name='txtDescription' class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><input type="number" value="{{$edit_combo->price}}" name='txtPrice' placeholder="Enter Price" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select class='w-100' name='txtStatus'>
                                            <option value="{{$edit_combo->status}}">{{$edit_combo->status}}</option>
                                            <option value='Available'>Available</option>
                                            <option value='Expired'>Expired</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-success w-100 text-white" value='Save'></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		@stop
