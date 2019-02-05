<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body style="background-color: #E9EBEE">

<!-- Navigation -->
{{--<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">--}}
    {{--<div class="container">--}}
        {{--<a class="navbar-brand" href="index">Social media</a>--}}
        {{--<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--Menu--}}
            {{--<i class="fas fa-bars"></i>--}}
        {{--</button>--}}
        {{--<div class="collapse navbar-collapse" id="navbarResponsive">--}}
            {{--<ul class="navbar-nav ml-auto">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="/index">Home</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="/aboout">About</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="/post">Sample Post</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="/contact">Add posts</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item ">--}}


                {{--@if (Route::has('login'))--}}

                {{--@auth--}}
                {{--<a  class="nav-link" href="{{ url('/home') }}">Home</a>--}}
                {{--@else--}}
                {{--<a class="nav-link" href="{{ route('login') }}">Login</a>--}}
                {{--<a class="nav-link" href="{{ route('register') }}">Register</a>--}}
                {{--@endauth--}}

                {{--@endif--}}

                {{--@guest--}}
                    {{--<li class="nav-item"><a href="{{ route('login') }}">Login</a></li>--}}
                    {{--<li class="nav-item"><a href="{{ route('register') }}">Register</a></li>--}}
                {{--@else--}}
                    {{--<li class=" nav-item dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>--}}
                            {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                        {{--</a>--}}

                        {{--<ul  class="dropdown-menu ">--}}
                            {{--<li class="nav-item">--}}
                                {{--<a  href="{{ route('logout') }}"--}}
                                    {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                    {{--Logout--}}
                                {{--</a>--}}

                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                    {{--{{ csrf_field() }}--}}
                                {{--</form>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--@endguest--}}

                    {{--</li>--}}






            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}
@yield('content')
{{--<footer>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-8 col-md-10 mx-auto">--}}
                {{--<ul class="list-inline text-center">--}}
                    {{--<li class="list-inline-item">--}}
                        {{--<a href="#">--}}
                  {{--<span class="fa-stack fa-lg">--}}
                    {{--<i class="fas fa-circle fa-stack-2x"></i>--}}
                    {{--<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>--}}
                  {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="list-inline-item">--}}
                        {{--<a href="#">--}}
                  {{--<span class="fa-stack fa-lg">--}}
                    {{--<i class="fas fa-circle fa-stack-2x"></i>--}}
                    {{--<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>--}}
                  {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="list-inline-item">--}}
                        {{--<a href="#">--}}
                  {{--<span class="fa-stack fa-lg">--}}
                    {{--<i class="fas fa-circle fa-stack-2x"></i>--}}
                    {{--<i class="fab fa-github fa-stack-1x fa-inverse"></i>--}}
                  {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<p class="copyright text-muted">Copyright &copy; Your Website 2018</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>

</html>
