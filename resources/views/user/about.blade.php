@extends('user.layouts.app')

@section('title', 'About Me')

@section('content')

<div class="container mb-5">
	<div class="row justify-content-center mt-5 mb-4">
		<h1>About Me</h1>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-4">
			<img src="asset/images/profile.jpg" alt="" class="img-fluid rounded-circle shadow">
		</div>
		<div class="col-md-6 mt-3">
			<h4>ANAS SHOFYAN MARTUNIS FATEH</h4>
			<p><span class="fa fa-code mr-2"></span>Informatics Engineering</p>
			<p><span class="fa fa-graduation-cap mr-2"></span>Electronic Engineering Polytechnic Institute of Surabaya </p>
			<a href="#" class="btn btn-danger mb-2"><span class="fa fa-align-left mr-2"></span>Read My Blog</a>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, quos nemo sit reiciendis, tempora eveniet vel quam itaque doloribus, consequatur modi nihil eligendi magnam officiis et illum quae voluptatum molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, quos nemo sit reiciendis, tempora eveniet vel quam itaque doloribus, consequatur modi nihil eligendi magnam officiis et illum quae voluptatum molestias!</p>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row justify-content-center mb-3">
		<h1>Location</h1>
	</div>
	<div class="row justify-content-center">
		<div class="col" style="margin: unset;padding: unset;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.63806396515!2d112.7870111146581!3d-7.281957773586426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa15a9cc1a99%3A0x432578fe6f6e2ee5!2sAnak+Teknik+Indonesia!5e0!3m2!1sid!2sid!4v1550945686245" width="100%" height="500" frameborder="0"  allowfullscreen></iframe>
		</div>
	</div>
</div>

@endsection