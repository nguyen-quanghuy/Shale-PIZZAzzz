@extends('masterTwo')
@section('title', 'WEEKEND-SPECIAL')
@section('main')
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Weekend Special Combo</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-center text-primary">
                        <th>
                          Id
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody class='text-center'>
                        @foreach($index_combo as $select_combo)
                        <tr>
                          <td>
                            {{$select_combo->id}}
                          </td>
                          <td>
                            <img src="{{asset('combo/'.$select_combo->combo_img)}}" width="150px">
                          </td>
                          <td>
                            {{$select_combo->description}}
                          </td>
                          <td>
                            {{$select_combo->price}}
                          </td>
                          <td>
                            {{$select_combo->status}}
                          </td>
                          <td>
                            <a href="{{route('edit_combo', $select_combo->id)}}" role='button' class='btn btn-primary'>Edit</a>
                            <a href="{{route('delete_combo', $select_combo->id)}}" role='button' class='btn btn-danger'>Del</a>
                          </td>
                        </tr>
                        @endforeach
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                              <a href="{{route('create_combo')}}" role='button' class='btn btn-primary'>+Add New Combo</a>
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
