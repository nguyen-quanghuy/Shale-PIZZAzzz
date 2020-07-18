@extends('masterTwo')
@section('title', 'INSERT-CATEGORY')
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
                        <form action="{{route('insert_category')}}" method='POST' enctype="multipart/form-data">
                            @csrf
                            <table >
                                <tr>
                                    <td>ID</td>
                                    <td><input type="number" name='nbrId' placeholder="Enter ID" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Categories Name</td>
                                    <td><input type="text" name='txtCatName' placeholder="Enter Categories Name" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Categories Image</td>
                                    <td><input type="file" name='txtCatImage' class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="text" name='txtDes' placeholder="Enter Description" class="form-control" size=50></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-primary w-100" value='Add New ID'></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		@stop
