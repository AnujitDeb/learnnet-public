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
    <div class="nav-header"  style="background-color: #9E62C7;">
        <div class="brand-logo">
            <a href="{{route('learnnet')}}">
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

<div class="header  bg-transparent">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu text-white"></i></span>
            </div>
        </div>
        <div class="header-left">
            <div class="input-group icons">
            </div>
        </div>
        <div class="header-right" style="padding-top: 15px; padding-right: 15px; display: flex">
            @if(session()->has('user'))
                <div style="display: flex">
                        @if(session('user.type') == 'admin')

                        @php
                            $allSubscription = \App\Models\Subscription::all();
                            $sumOfSubscription = $allSubscription->where('status', 'approved')->sum('payable_amount');
                            //$sumOfSubscription = $sumOfSubscription - (($sumOfSubscription * 25) / 100);

                            $allWithdraw = \App\Models\InstructorCreditNote::all();
                            $sumOfWithdraw = $allWithdraw->where('status', 'disbursed')->sum('amount');

                            $Adminbalance = $sumOfSubscription - $sumOfWithdraw;
                        @endphp

                            @if($Adminbalance == 0)
                                <li style="padding-right: 5px">
                                    <button class="btn btn-outline-danger" type="button" style="pointer-events: none;">
                                        {{$Adminbalance.'(৳)'}}
                                    </button>
                                </li>
                            @else
                                <li style="padding-right: 5px">
                                    <button class="btn btn-outline-success" type="button" style="pointer-events: none;">
                                        {{$Adminbalance.'(৳)'}}
                                    </button>
                                </li>
                            @endif
                        @elseif(session('user.type') == 'instructor')


                        @php
                            $instructor = \App\Models\Subscription::where('instructor_id', session('user.id'));
                            $sumOfSubscription = $instructor->where('status', 'approved')->sum('payable_amount');
                            $sumOfSubscription = $sumOfSubscription - (($sumOfSubscription * 25) / 100);

                            $instructorWithdraw = \App\Models\InstructorCreditNote::where('instructor_id', session('user.id'));
                            $sumOfWithdraw = $instructorWithdraw->where('status', 'disbursed')->sum('amount');

                            $Instructorbalance = $sumOfSubscription - $sumOfWithdraw;
                        @endphp

                            @if($Instructorbalance == 0)
                                <li style="padding-right: 5px">
                                    <button class="btn btn-outline-danger" type="button" style="pointer-events: none;">
                                        {{$Instructorbalance.'(৳)'}}
                                    </button>
                                </li>
                            @else
                                <li style="padding-right: 5px">
                                    <button class="btn btn-outline-success" type="button" style="pointer-events: none;">
                                        {{$Instructorbalance.'(৳)'}}
                                    </button>
                                </li>
                            @endif
                        @endif
                        <li>
                            <a href="{{route('logout')}}" class="btn btn-outline-primary">
                                {{\Illuminate\Support\Facades\Session::flash('logoutCheck', 'backend')}}
                                Logout
                            </a>
                        </li>
            @else
                <li style="padding-right: 5px"><a href="{{route('login.index')}}" class="btn btn-outline-primary">Login</a></li>
                <li><a href="{{route('register.index')}}" class="btn btn-outline-primary">Register</a></li>
            @endif
                </div>
        </div>
    </div>
</div>
