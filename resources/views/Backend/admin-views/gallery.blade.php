@extends('masterTwo')
@section('title', 'Gallery')
@section('main')
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Gallery</h4>
                </div>
                <div class="card-body">
                  @foreach($index_gal as $select_gal)
                    <img src="{{asset('gallery/'.$select_gal->img)}}" width='120px' height='120px'>
                  @endforeach
                </div>
                <div class='card-footer d-flex justify-content-end'>
                  <a href="{{route('create_img')}}" role='button' class="btn btn-primary">Edit Album</a>
                  <a href="{{route('delete_img')}}" role='button' class="btn btn-danger" style='margin-left: 10px;'>Delete Album</a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    @stop
