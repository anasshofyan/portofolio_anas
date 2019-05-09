@extends('user.layouts.app')

@section('title', 'Contact Me')

@section('content')
<div class="container-fluid  bg-gray p-5">
	<div class="container">
		<div class="row justify-content-center">
			<h1 class="text-black">Contact Me</h1>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
				<div class="card p-4 border-0">
					<form method="post" action="" autocomplete="off">
						@csrf
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control {{$errors->has('name')?'is-invalid' : ''}}" id="name" name="name" placeholder="Input Your Name">
							{!!$errors->first('name', '<span class="invalid-feedback">:message</span>')!!}
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control {{$errors->has('email')?'is-invalid' : ''}}" id="email" name="email" placeholder="Input Your Email">
							{!!$errors->first('email', '<span class="invalid-feedback">:message</span>')!!}
						</div>
						<div class="form-group">
							<label for="phone">Phone</label>
							<input type="number" class="form-control {{$errors->has('phone')?'is-invalid' : ''}}" id="phone" name="phone" placeholder="Input Your Phone Number">
							{!!$errors->first('phone', '<span class="invalid-feedback">:message</span>')!!}
						</div>
						<div class="form-group">
							<label for="message">Message</label>
							<textarea name="message" class="form-control {{$errors->has('message')?'is-invalid' : ''}}" id="message" name="message" cols="30" rows="5" placeholder="Input Your Message"></textarea>
							{!!$errors->first('message', '<span class="invalid-feedback">:message</span>')!!}
						</div>
						<button type="submit" class="btn btn-success">Send Message</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection