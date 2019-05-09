{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-light  shadow bg-linear">
    <div class="container">
        <img src="{{ asset('asset/logo/logo.png') }}" width="30" alt="">
  <a class="navbar-brand text-white ml-2 font-logo" href="/">ANASSHOFYAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/portofolio">Portofolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/about">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/contact">Contact Me</a>
      </li>
    </ul>
    <a href="/admin" class="btn btn-outline-light">Login</a>
  </div>
  </div>
</nav>
{{-- end navbar  --}}