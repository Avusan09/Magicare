<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin @yield('title')</title>
    {{--<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/compiled.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/thaili.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/nepali.datepicker.v2.2.min.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.17/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/r-2.2.2/rr-1.2.4/sc-5.04.4/sl-1.2.6/datatables.min.css"/>






</head>
<body>
<nav class="navbar  navbar-expand-lg navbar-dark black scrolling-navbar " >



            <a class="navbar-brand" href="/admin"><strong>MCIS</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="nav navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="navbar-nav nav-flex-icons dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>i
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>

        </nav>

        <div class="container-fluid dashboard-vendor">
            @yield('content')
        </div>



<script src="{{asset('js/compiled.min.js')}}"></script>
<script src="{{asset('js/thaili.js')}}"></script>
<script src="{{asset('js/extra.js')}}"></script>







</body>
</html>