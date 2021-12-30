<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/Logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield ('title')
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">

        <div class="sidebar" data-color="orange">
            <div class="logo">
                <a href="/" class="simple-text logo-mini">
                    D
                </a>
                <a href="/home" class="simple-text logo-normal">
                    DoctArea
                </a>
            </div>
            <div class="profilePic">
                <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" alt="Admin DP" width="50" height="50">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="../profile">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="../doctors">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Doctors</p>
                        </a>
                    </li>
                    <li>
                        <a href="../patients">
                            <i class="now-ui-icons media-2_sound-wave"></i>
                            <p>Patients</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="btn btn-primary" role="button" href="/profile">
                                    Account
                                </a>
                                </p>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-primary" role="button" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Log out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="panel-header panel-header-sm">
            </div>

            <div class="content">

                @yield ('content')

            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>

</html>
