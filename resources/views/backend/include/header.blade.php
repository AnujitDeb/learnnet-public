<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Learnnet Admin Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="asset/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="asset/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="asset/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    {{--json data table--}}
    <link href="asset/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="asset/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="asset/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/css/all.css" rel="stylesheet">

</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
            <a href="index.html">
                <b class="logo-abbr"><img src="asset/images/logo.png" alt=""> </b>
                <span class="logo-compact"><img src="asset/images/logo-compact.png" alt=""></span>
                <span class="brand-title">
                        <h2 style="text-align: center; color: white">Learnnet</h2>
                    </span>
            </a>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
            <div class="input-group icons">
            </div>
        </div>
        <div class="header-right">

            <li class="icons dropdown">
                <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                    <span class="activity active"></span>
                    <img src="asset/images/niaz.jpg" height="40" width="40" alt="">
                </div>
                <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="{{route('profile')}}"><i class="icon-user"></i> <span>Profile</span></a>
                            </li>
                            <li>
                                <a href="app-profile.html"><i class="icon-user"></i> <span>Account</span></a>
                            </li>
                            <!-- <li>
                                 <a href="javascript:void()">
                                     <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                 </a>
                             </li>-->

                            <hr class="my-2">
                            <!--<li>
                                <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                            </li>-->
                            @if(session()->has('user'))
                                <li>
                                    <a href="{{route('logout')}}"><i class="icon-key"></i>
                                        {{\Illuminate\Support\Facades\Session::flash('logoutCheck', 'backend')}}
                                        <span>Logout</span>
                                    </a>
                                </li>
                            @else
                                <li><a href="{{route('login.index')}}"><i class="icon-key"></i> <span>Login</span></a></li>
                                <li><a href="{{route('register.index')}}"><i class="icon-key"></i> <span>Register</span></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </li>
            </ul>
        </div>
    </div>
</div>
