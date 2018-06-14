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
<section>
    <div id="mySidenav" class="sidenav z-depth-3">

        <div id="dashboard-shrinked" style="display:none;">
            <div class="thaili-logo-dashboard-big" >
                <a href="/">
                    <img src="{{asset('img/mini.png')}}" id="dashboard-logo" class="grails-logo wow fadeIn" style="padding-left:10px;height: 60px;"/>
                </a>
            </div>

            <hr style="border: 1px solid white">

            <ul class="list-group list-group-flush">

                <li class="list-group-item">
                    <a href="/admin" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <img src="{{asset('img/icons/01.png')}}" class="thaili-icons-lg" />
                    </a>
                </li>

                <li class="list-group-item">
                    <a href="/admin/sales" data-toggle="tooltip" data-placement="right" title="Manage Sales">
                        <img src="{{asset('img/icons/03.png')}}" class="thaili-icons-lg" >
                    </a>
                </li>

                <li class="list-group-item">
                    <a href="/admin/stockist" data-toggle="tooltip" data-placement="right" title="Manage Stockists">
                        <img src="{{asset('img/icons/tree.png')}}" class="thaili-icons-lg" >
                    </a>
                </li>



                <li class="list-group-item">
                    <a href="/admin/vehicle" data-toggle="tooltip" data-placement="right" title="Vehicle">
                        <img src="{{asset('img/icons/vehicle.png')}}" class="thaili-icons-lg" >
                    </a>
                </li>


            </ul>
        </div>

        <div id="dashboard-expanded" class="wow fadeIn" >
            <div class="nav-link">
                <div class="profile-image">
                    <a href="/">
                        <img src="{{asset('img/magicare.png')}}" id="dashboard-logo"  style="height: 150px;margin-left: -25px;" class="grails-logo wow fadeIn"/>
                    </a>
                    <span class="online-status online"></span>
                </div>
                <br>

            </div>


            <ul class="list-group list-group-flush"  class="wow fadeIn">
                <a href="/admin/" class="list-group-item">
                    <img src="{{asset('img/icons/01.png')}}" class="thaili-icons" />
                    Dashboard
                </a>



                <a href="/admin/sales"><li class="list-group-item"> <img src="{{asset('img/icons/03.png')}}" class="thaili-icons-xs" /> Sales</li></a>

                <!-- Accordion card -->
                <a href="/admin/stockist"><li class="list-group-item"><img src="{{asset('img/icons/tree.png')}}" class="thaili-icons-xs" /> Stockists</li></a>

                <a href="/admin/vehicle" class="list-group-item"><img src="{{asset('img/icons/vehicle.png')}}" class="thaili-icons" />      Vehicles</a>
                <a href="" class="list-group-item"><img src="{{asset('img/icons/settings.png')}}" class="thaili-icons" />     Settings</a>

            </ul>
        </div>


    </div>

    <div id="main">

        <nav class="navbar  navbar-expand-lg navbar-dark black scrolling-navbar navbar-75" >
            <div style="font-size:30px;cursor:pointer;padding-right: 10px" class="primary-color-gold" onclick="toggleNav()">&#9776; </div>


            <a class="navbar-brand" href="/admin"><strong>Admin Dashboard</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item" style="padding-top: 20px">
                        <a class="nav-link" >Admin</a>
                    </li>
                    <div class="dropdown" style="padding-top: 20px">

                        <!--Trigger-->
                        <a class="nav-link  dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><img src="{{asset('img/icons/settings.png')}}" class="thaili-icons" /> </a>


                        <!--Menu-->
                        <div class="dropdown-menu dropdown-primary" style="left: -100px;">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="/#/#">Profile</a>
                            <a class="dropdown-item" href="#">Report</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </div>
                </ul>
            </div>

        </nav>

        <div class="container-fluid dashboard-vendor" >
            @yield('content')
        </div>


    </div>




</section>



    <script src="{{asset('js/compiled.min.js')}}"></script>
    <script src="{{asset('js/thaili.js')}}"></script>
    <script src="{{asset('js/extra.js')}}"></script>



{{--<script src="https://fastcdn.org/FileSaver.js/1.1.20151003/FileSaver.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.0/xlsx.core.min.js"></script>--}}
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.17/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/r-2.2.2/rr-1.2.4/sc-5.04.4/sl-1.2.6/datatables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="{{asset('js/nepali.datepicker.v2.2.min.js')}}"></script>






</body>
</html>