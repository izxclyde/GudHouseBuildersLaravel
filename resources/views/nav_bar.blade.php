<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
  </head>
  <body>

    <header class="header">

    <nav class="navbar sticky-top  navbar-expand-lg">
<div class="container-fluid">
    <a href="#"><img class="logo" src="img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{url('index')}}">Home</a>
        <a class="nav-link active" aria-current="page" href="{{url('services')}}">Services</a>
        <a class="nav-link active" aria-current="page" href="{{url('projects')}}">Projects</a>
        <a class="nav-link active" aria-current="page" href="{{url('aboutus')}}">About</a>
        <a class="nav-link active" aria-current="page" href="{{url('contact')}}">Contact Us</a>
      </div>
    </div>
  </div>
</nav>

    @yield('content')

    </header>
  </body>
  <script>
$(window).scroll(function () {
if ($(window).scrollTop() >= 20) {
$('.navbar').css('background','#ffffff');
} else {
$('.navbar').css('background','transparent');
}
});
</script>
</html>
