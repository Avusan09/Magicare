<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin @yield('title') </title>

    <link rel="stylesheet" href="{{asset('css/compiled.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/now-ui-dashboard.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<div class="wrapper ">
    <div class="sidebar" data-color="white">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
               MC
            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Magicare
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li >
                    <a href="/admin">
                        <i class="fa fa-user"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li >
                    <a href="/admin-user">
                        <i class="fa fa-user"></i>
                        <p>Users</p>
                    </a>

                <li>
                    <a href="../admin/sales">
                        <i class="fa fa-archive"></i>
                        <p>Sales  </p>
                    </a>
                </li>

                <li >
                    <a href="/admin/stockist">
                        <i class="fa fa-archive"></i>
                        <p>Stockist </p>
                    </a>
                </li>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" > @yield('dashboard')</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form class="form-inline md-form form-sm">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
                    </form>
                    <ul class="navbar-nav">


                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="fa fa-user-circle-o"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header panel-header-lg" style="height: 100px !important;">

        </div>


        @yield('content')



        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Magicare
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="https://www.invisionapp.com" target="_blank">CarefreeAv</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">CarefreeAv</a>.
                </div>
            </div>
        </footer>
    </div>
</div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/compiled.min.js')}}"></script>
    <script src="{{asset('js/now-ui-dashboard.min.js')}}"></script>
    <script src="{{asset('js/extra.js')}}"></script>

</body>
</html>