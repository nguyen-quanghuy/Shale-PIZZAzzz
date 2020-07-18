@extends('masterTwo')
@section('title', 'INSERT-GALLERY')
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
                        <form action="{{route('insert_img')}}" method='POST' enctype="multipart/form-data">
                            @csrf
                            <table >
                                <tr>
                                    <td>Image</td>
                                    <td><input type="file" name='txtImg' class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="text" name='txtImgDescription' class="form-control" placeholder="Enter Description"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' class="btn btn-primary w-100" value='Add New Image' style="color: white"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		@stop
