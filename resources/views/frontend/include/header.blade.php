<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true">

<head>
    <!-- Bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>LEARNNET</title>
    <meta name="description" content="Acorn elearning platform dashboard."/>
    <!-- Favicon Tags Start -->

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="frontendAsset/img/favicon/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="frontendAsset/img/favicon/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="frontendAsset/img/favicon/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="frontendAsset/img/favicon/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="frontendAsset/img/favicon/apple-touch-icon-60x60.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
          href="frontendAsset/img/favicon/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="frontendAsset/img/favicon/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
          href="frontendAsset/img/favicon/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="frontendAsset/img/favicon/favicon-196x196.png" sizes="196x196"/>
    <link rel="icon" type="image/png" href="frontendAsset/img/favicon/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/png" href="frontendAsset/img/favicon/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="frontendAsset/img/favicon/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="frontendAsset/img/favicon/favicon-128.png" sizes="128x128"/>
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="frontendAsset/img/favicon/mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo" content="frontendAsset/img/favicon/mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="frontendAsset/img/favicon/mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo" content="frontendAsset/img/favicon/mstile-310x150.png"/>
    <meta name="msapplication-square310x310logo" content="frontendAsset/img/favicon/mstile-310x310.png"/>


    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="frontendAsset/font/CS-Interface/style.css"/>
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="frontendAsset/css/vendor/bootstrap.min.css"/>
    <link rel="stylesheet" href="frontendAsset/css/vendor/OverlayScrollbars.min.css"/>
    <link rel="stylesheet" href="frontendAsset/css/vendor/glide.core.min.css"/>
    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="frontendAsset/css/styles.css"/>
    <link rel="stylesheet" href="frontendAsset/css/main.css"/>
    <!-- Template Base Styles End -->
    <script src="frontendAsset/js/base/loader.js"></script>
</head>

<body style="padding-bottom: 0px;">
<div id="root">

    {{--Navbar start--}}

    <div id="nav" class="nav-container d-flex">
        <div class="nav-content d-flex">
            <!-- Logo Start -->
            <div class="logo position-relative">
                <a href="/">
                    <!-- Logo can be added directly -->
                    <!-- <img src="/img/logo/logo-white.svg" alt="logo" /> -->

                    <!-- Or added via css to provide different ones for different color themes -->
                    <div class="img"></div>
                </a>
            </div>

            <!-- Logo End -->

            <!-- Language Switch Start -->
            <!--<div class="language-switch-container">
                <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">BN</a>
                    <a href="#" class="dropdown-item active">EN</a>
                    &lt;!&ndash; <a href="#" class="dropdown-item">ES</a> &ndash;&gt;
                </div>
            </div>-->
            <!-- Language Switch End -->

            <!-- User Menu Start -->
            <div class="user-container d-flex">
                <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    @if(session()->has('user'))
                            <img class="profile" alt="profile" src="{{asset('/profilePic/'.session('user.image'))}}"/>
                            <div class="name">
                                {{session('user.first_name')}}
                            </div>
                        @else
                            <img class="profile" alt="profile" src="asset/images/avatar.png"/>
                            <div class="name">
                                User
                            </div>
                        @endif
                </a>
                <div class="dropdown-menu dropdown-menu-end user-menu wide hidden">

                </div>
            </div>
            <!-- User Menu End -->

            <!-- Icons Menu Start -->
            <ul class="list-unstyled list-inline text-center menu-icons">

                <li class="list-inline-item">
                    <a href="#" id="colorButton">
                        <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                        <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
                    </a>
                </li>
                @if(session()->has('user'))
                    <li class="list-inline-item">
                        <a href="{{route('logout')}}" id="logout">
                            <i data-acorn-icon="logout" class="icon" data-acorn-size="18"></i>
                        </a>
                    </li>
                @endif
            </ul>
            <!-- Icons Menu End -->

            <!-- Menu Start -->

            @include('frontend.include.sidebar')

            <!-- Menu End -->

            <!-- Mobile Buttons Start -->
            <div class="mobile-buttons-container">
                <!-- Scrollspy Mobile Button Start -->
                <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                    <i data-acorn-icon="menu-dropdown"></i>
                </a>
                <!-- Scrollspy Mobile Button End -->

                <!-- Scrollspy Mobile Dropdown Start -->
                <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                <!-- Scrollspy Mobile Dropdown End -->

                <!-- Menu Button Start -->
                <a href="#" id="mobileMenuButton" class="menu-button">
                    <i data-acorn-icon="menu"></i>
                </a>
                <!-- Menu Button End -->
            </div>
            <!-- Mobile Buttons End -->
        </div>
        <div class="nav-shadow"></div>
    </div>
{{--Navbar end--}}
