@extends('masterTwo')
@section('title', 'EDIT-USER')
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
						<form action="{{route('update_user', $edit_user->id)}}" method='POST'>
							@csrf
							<table>
								<tr>
									<td>ID</td>
									<td><input type="number" name='nbrId_user' placeholder="Enter your ID" class="form-control" value="{{$edit_user->id}}"></td>
								</tr>
								<tr>
									<td>Name</td>
									<td><input type="text" name='txtName' placeholder="Enter your Name" class="form-control" value="{{$edit_user->name}}"></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input type="password" name='txtPwd_user' placeholder="Enter your Password" class="form-control" value="{{$edit_user->password}}"></td>
								</tr>
								<tr>
									<td>Phone Number</td>
									<td><input type="number" name='nbrPhone' placeholder="Enter your Phone Number" class="form-control" value="{{$edit_user->phone_number}}"></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="email" name='txtEmail' placeholder="Enter your Email" class="form-control" value="{{$edit_user->email}}"></td>
								</tr>
								<tr>
									<td></td>
									<td><input type='submit' class="btn btn-success w-100" value='EDIT'></td>
								</tr>
							</table>
						</form>
                    </div>
                </div>
            </div>
        </div>
	@stop
