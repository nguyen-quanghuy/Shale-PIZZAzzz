@extends('masterTwo')
@section('title', 'INSERT-ADMIN')
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
                        <form action="{{route('insert')}}" method='POST'>
                            @csrf
                            <table >
                                <tr>
                                    <td>ID</td>
                                    <td>
                                        <input type="number" name='nbrId' placeholder="Enter ID" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Permission</td>
                                    <td>
                                        <input type="text" name='txtPermission' placeholder="Enter Permission" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>User Name</td>
                                    <td>
                                        <input type="text" name='txtUserName' placeholder="Enter User Name" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>
                                        <input type="password" name='txtPwd' placeholder="Enter Password" class="form-control" size=50>
                                    </td>
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
