@extends('masterTwo')
@section('title', 'INSERT-USER')
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
						<form action="{{route('insert_user')}}" method='POST'>
							@csrf
							<table>
								<tr>
									<td>ID</td>
									<td><input type="number" name='nbrId_user' placeholder="Enter your ID" class="form-control"></td>
								</tr>
								<tr>
									<td>Name</td>
									<td><input type="text" name='txtName' placeholder="Enter your Name" class="form-control"></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input type="password" name='txtPwd_user' placeholder="Enter your Password" class="form-control"></td>
								</tr>
								<tr>
									<td>Phone Number</td>
									<td><input type="number" name='nbrPhone' placeholder="Enter your Phone Number" class="form-control"></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="email" name='txtEmail' placeholder="Enter your Email" class="form-control"></td>
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
