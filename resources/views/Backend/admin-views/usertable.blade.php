@extends('masterTwo')
@section('title', 'USER-TABLE')
@section('main')
        <div class="container-fluid">
          <div class="row">

			<div class="col-md-12">
              @if($message = Session::get('success'))
                  <div class='alert alert-success' role='alert'>
                      <p>{{$message}}</p>
                  </div>
              @endif
              <p>Have {{count($index_admin)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Admin Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-center">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Permission
                        </th>
                        <th>
                          User Name
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($index_admin as $select_admin)
                        <tr>
                          <td>
                            {{$select_admin->id}}
                          </td>
                          <td>
                          {{$select_admin->permission}}
                          </td>
                          <td>
                          {{$select_admin->user_name}}
                          </td>
                          <td>
                            <a  href="{{route('edit', $select_admin->id)}}" class="btn btn-primary" style="margin-left: 0px;width: 60px; color: white">Edit</a>
                            <a  href="{{route('delete', $select_admin->id)}}" class="btn btn-danger" style="margin-left: 0px;width: 60px; color: white">Del</a>
                          </td>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create')}}" class="btn btn-primary" style="margin-left: 0px; color: white">Add new ID</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="col-md-12">
            <br>
              @if($message = Session::get('success_user'))
                  <div class="alert alert-success" role="alert">
                    <p>{{$message}}</p>
                  </div>
              @endif
              <p>Have {{count($index_user)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">User Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-center">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Phone Number
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($index_user as $select_user)
                        <tr>
                          <td>
                            {{$select_user->id}}
                          </td>
                          <td>
                            {{$select_user->name}}
                          </td>
                          <td>
                          {{$select_user->phone_number}}
                          </td>
                          <td>
                          {{$select_user->email}}
                          </td>
                          <td>
                            <a href="{{route('edit_user', $select_user->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px">Edit</a>
                            <a href="{{route('delete_user', $select_user->id)}}" class="btn btn-danger style="margin-left: 0px; width: 60px" id='btnDelete'>Del</a>
                          </td>
                        </tr>
                        @endforeach
                         <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create_user')}}" type="submit" class="btn btn-primary" style="margin-left: 0px;">Add new ID</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div><br>


        </div>

      </div>
    </div>
	@stop
