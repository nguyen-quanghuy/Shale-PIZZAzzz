@extends('masterTwo')
@section('title', 'FEEDBACK')
@section('main')
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
              @endif
              <p>Have {{count($feedBack)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Feedback Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          User Name
                        </th>
                        <th>
                          Feedback
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
                      @foreach($feedBack as $select_feedBack)
                        <tr>
                          <td>
                            {{$select_feedBack->id}}
                          </td>
                          <td>
                            {{$select_feedBack->name}}
                          </td>
                          <td>
                            {{$select_feedBack->feed_back}}
                          </td>
                          <td>
                            {{$select_feedBack->phone_number}}
                          </td>
                          <td>
                            {{$select_feedBack->email}}
                          </td>
                          <td>
                            <!-- <a href="" class="btn btn-success"style="margin-left: 0px;width: 60px">Edit</a> -->
                            <a href="{{route('delete_feedBack', $select_feedBack->id)}}" class="btn btn-danger" style="margin-left: 0px;width: 60px">Del</a>
                          </td>
                        </tr>
                        @endforeach
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
