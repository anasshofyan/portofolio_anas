@extends('user.layouts.app')

@section('title', 'Home')

@section('content')

{{-- carousel --}}
<div class="container-fluid" style="margin: unset;padding: unset;">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="{{ asset('asset/images/c1.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('asset/images/c2.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('asset/images/c3.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('asset/images/c4.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
</div>
{{-- end carousel --}}

{{-- cards --}}
<div class="container mb-5">
  <div class="row justify-content-center mt-5"><h1>Article</h1></div>
  <div class="row mt-3">
    @for ($i = 0; $i < $x = 4 ; $i++)
      <div class="col-md-3 ">
      <div class="card w-100 rounded-0" style="width: 18rem;">
        <img src="{{ asset('asset/images/1.jpg') }}" class="card-img-top rounded-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Read more...</a>
        </div>
      </div>
    </div>
    @endfor
  </div>
</div>
{{-- endcards --}}

@endsection
