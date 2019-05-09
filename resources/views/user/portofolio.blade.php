@extends('user.layouts.app')

@section('title', 'Portofolio')

@section('content')

<div class="container mb-5">
	<div class="row justify-content-center mt-5">
		<h1>Portofolio</h1>
	</div>
	<div class="row mt-4 p-3">
		<div class="col-md-4">
			<img src="{{ asset('asset/images/2.jpg') }}" alt="" class="img-thumbnail">
		</div>
		<div class="col-md-4">
			<img src="{{ asset('asset/images/2.jpg') }}" alt="" class="img-thumbnail">
		</div>
		<div class="col-md-4">
			<img src="{{ asset('asset/images/2.jpg') }}" alt="" class="img-thumbnail">
		</div>
	</div>
	<div class="row mt-1 p-3">
		<div class="col-md-4">
			<img src="{{ asset('asset/images/2.jpg') }}" alt="" class="img-thumbnail">
		</div>
		<div class="col-md-4">
			<img src="{{ asset('asset/images/2.jpg') }}" alt="" class="img-thumbnail">
		</div>
		<div class="col-md-4">
			<img src="{{ asset('asset/images/2.jpg') }}" alt="" class="img-thumbnail">
		</div>
	</div>
</div>

@endsection