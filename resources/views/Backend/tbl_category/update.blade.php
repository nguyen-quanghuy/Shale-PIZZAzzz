@extends('masterTwo')
@section('title', 'EDIT-CATEGORY')
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
                    <form action="{{route('update_category', $edit->id)}}" method='POST' enctype="multipart/form-data">
                            @csrf
                            <table >
                                <tr>
                                    <td>ID</td>
                                    <td><input type="number" name='nbrId' placeholder="Enter ID" class="form-control" value='{{$edit->id}}'></td>
                                </tr>
                                <tr>
                                    <td>Categories Name</td>
                                    <td><input type="text" name='txtCatName' placeholder="Enter Categories Name" class="form-control" value='{{$edit->cat_name}}'></td>
                                </tr>
                                <tr>
                                    <td>Categories Image</td>
                                    <td><input type="file" name='txtCatImage' class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="text" name='txtDes' placeholder="Enter Description" class="form-control" value='{{$edit->cat_description}}' size=50></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-success w-100" value='Edit'></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	@stop
