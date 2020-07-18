
@extends('masterTwo')
@section('title', 'INSERT-COMBO')
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
                        <form action="{{route('insert_combo')}}" method='POST' enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tr>
                                    <td>Combo Image</td>
                                    <td><input type="file" name='txtComboImg' class="form-control"></td>
                                </tr>


                                <tr>
                                    <td>Description</td>
                                    <td><textarea name='txtDescription' class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><input type="number" name='txtPrice' placeholder="Enter Price" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select class='w-100' name='txtStatus'>
                                            <option value='Available'>Available</option>
                                            <option value='Expired'>Expired</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-primary w-100 text-white" value='Add New Combo'></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		@stop
