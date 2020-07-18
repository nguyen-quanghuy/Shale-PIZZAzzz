@extends('masterTwo')
@section('title', 'DASHBOARD')
@section('main')
            <h2>DASHBOARD</h2>
            <div class="line"></div>
            <div class="row">
				<div class="col-md-4">
					<h4>TOTAL VISIT</h4>
					<ul class="list-inline">
						<li class="d-inline">
							<img src="{{asset('Img/total-visit.png')}}" width="120">
						</li>
						<li class="text-right d-inline">
							<span class="counter text-success">669</span>
						</li>
						<li>
							<button class="btn btn-primary">Edit</button>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4>TOTAL PAGE VIEWS</h4>
					<ul class="list-inline">
						<li class="d-inline">
							<img src="{{asset('Img/total-page-views.png')}}" width="60">
						</li>
						<li class="text-right d-inline">
							<span class="counter text-success">752</span>
						</li>
						<li>
							<button class="btn btn-primary">Edit</button>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4>UNIQUE VISITOR</h4>
					<ul class="list-inline">
						<li class="d-inline">
							<img src="{{asset('Img/unique-visitor.png')}}" width="120">
						</li>
						<li class="text-right d-inline">
							<span class="counter text-success">946</span>
						</li>
						<li>
							<button class="btn btn-primary">Edit</button>
						</li>
					</ul>
				</div>
			</div>
			<div class="line"></div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-left">PRODUCT YEARLY SALES</h3>
					<h5 class="text-right">
						<i class="fa fa-circle" style="color: yellow"></i>
						Spring of 2020
					</h5>
					<h5 class="text-right">
						<i class="fa fa-circle text-success"></i>
						Autumn of 2020
					</h5>
					<h5 class="text-right">
						<i class="fa fa-circle" style="color: pink;"></i>
						Winter of 2020
					</h5>
					<img src="{{asset('Img/chart.jpg')}}" style="width: 63rem; height: 25rem;">
				</div>
			</div>
			<div class="line"></div>
			<div class="row">
				<div class="col-md-12 d-flex justify-content-end">
					<button class="btn btn-primary d-inline">Edit</button>
					<button class="btn btn-success d-inline">Save</button>
				</div>
			</div>
    	</div>
        @stop
