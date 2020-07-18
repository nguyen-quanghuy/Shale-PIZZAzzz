@extends('masterTwo')
@section('title', 'MENU-TABLE')
@section('main')
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
              @if($message = Session::get('success_category'))
                <div class="alert alert-success" role="alert">
                  <p>{{$message}}</p>
                </div>
              @endif
              <p>Have {{count($index_category)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Categories Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-center">
                      <thead class="text-center text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Categories Name
                        </th>
                        <th>
                          Categories Image
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody class="text-center">
                        @foreach($index_category as $select_category)
                          <tr>
                            <td>
                              {{$select_category->id}}
                            </td>
                            <td>
                              {{$select_category->cat_name}}
                            </td>
                            <td>
                              <img src="{{asset('category/'.$select_category->cat_image)}}" alt="error" width="200px" height="200px">
                            </td>
                            <td>
                              {{$select_category->cat_description}}
                            </td class="d-flex justify-content-center">
                            <td colspan=2>
                              <a  href="{{route('edit_category', $select_category->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px;">Edit</a>
                              <a  href="{{route('delete_category', $select_category->id )}}" class="btn btn-danger" style="margin-left: 0px; width: 60px;">Del</a>
                            </td>
                          </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create_category')}}" class="btn btn-primary" style="margin-left: 0px; color: white">Add new Category</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>

           <div class="col-md-12" style="margin-top: 20px">
              @if($message = Session::get('success_product'))
                  <div class="alert alert-success" role="alert">
                    <p>{{$message}}</p>
                  </div>
              @endif
              <p>Have {{count($index_product)}} records</p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Product Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-center text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Categories ID
                        </th>
                        <th>
                          Menu
                        </th>
                        <th>
                          Image Product
                        </th>
                        <th>
                          Dish Name
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Inventory
                        </th>
                        <th>
                          Customer Reviews
                        </th>
                        <th colspan=2>
                          Action
                        </th>

                      </thead>
                      <tbody class="text-center">
                      @foreach($index_product as $select_product)
                        <tr>
                          <td>
                            {{$select_product->id}}
                          </td>
                          <td>
                            {{$select_product->cat_id }}
                          </td>
                          <td>
                            {{$select_product->menu }}
                          </td>
                          <td>
                            <img src="{{asset('product/'.$select_product->prd_img)}}" alt="welcome" width="200px" height="200px">
                          </td>
                          <td>
                            {{$select_product->dish_name}}
                          </td>
                          <td>
                            {{$select_product->price}}
                          </td>
                          <td>
                            {{$select_product->inventory}}
                          </td>
                          <td>
                            {{$select_product->customer_reviews}}
                          </td>
                          <td>
                            <a href="{{route('edit_product', $select_product->id)}}" class="btn btn-primary" style="margin-left: 0px; width: 60px;">Edit</a>
                          </td>
                          <td>
                            <a href="{{route('delete_product', $select_product->id)}}" class="btn btn-danger" style="margin-left: 0px; width: 60px;">Del</a>
                          </td>
                        </tr>
                      @endforeach
                      <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            	<a href="{{route('create_product')}}" class="btn btn-primary" style="margin-left: 0px; color: white">Add new Product</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>

      </div>
    </div>
    @stop
