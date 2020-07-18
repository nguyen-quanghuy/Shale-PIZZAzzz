@extends('masterTwo')
@section('title', 'EDIT-ADMIN')
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
						<form action="{{route('update', $edit->id)}}" method='POST'>
							@csrf
							<table>
								<tr>
									<td>ID</td>
									<td>
                                        <input type="number" class="form-control" name='nbrId' placeholder="Enter ID" value="{{$edit->id}}">
                                    </td>
								</tr>
								<tr>
									<td>Permission</td>
									<td>
                                        <input type="text" class="form-control" name='txtPermission' placeholder="Enter Permission" value="{{$edit->permission}}">
                                    </td>
								</tr>
								<tr>
									<td>User Name</td>
									<td>
                                        <input type="text" class="form-control" name='txtUserName' placeholder="Enter User Name" value="{{$edit->user_name}}">
                                    </td>
								</tr>
								<tr>
									<td>Password</td>
									<td>
                                        <input type="password" class="form-control" name='txtPwd' placeholder="Enter Password" value="{{$edit->password}}">
                                    </td>
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
