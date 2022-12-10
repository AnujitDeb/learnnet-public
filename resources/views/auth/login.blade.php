<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="authAsset/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="authAsset/css/all.css"/>
        <link rel="stylesheet" href="authAsset/css/style.css"/>

        <title>Login</title>
    </head>
    <body>

        <!-- nav -->
        <nav class="navbar navbar-expand bg-light navbar-lite shadow">
            <div class="container">
                <a href="{{route('learnnet')}}" class="navbar-brand "><h3 class="text-uppercase font-weight-bold ">Learnnet</h3></a>
                <ul class="navbar-nav font-weight-bold">

                    <li><a href="{{route('learnnet')}}" class="nav-link mx-2">Home</a></li>
                    <li><a href="{{url('login')}}" class="nav-link mx-2">Login</a></li>
                    <li><a href="{{url('register')}}" class="nav-link mx-2">Sign Up</a></li>
                </ul>
            </div>
        </nav>


        <div class="container register ">
            <div class="row">
                <div class="col-md-3 register-left">
                    <!-- <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/> -->
                    <h3>Welcome to Learnnet</h3>
                    {{--<p>You are 30 seconds away from earning your own money!</p>--}}
                    <a href="{{url('register')}}"><input type="submit" name="" value="Register"/></a><br/>
                </div>

                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="{{route('loginCheck')}}" method="post">
                                @csrf
                            <h3 class="register-heading">Enter your Email and Password</h3>
                            <div class="row register-form">
                                <div class="col-md-6 m-sm-auto">

                                    <div class="form-group">
                                        <input type="email" class="form-control mt-2 @error('email') is-invalid @enderror" placeholder="Your Email *" value="" name="email"/>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password *" value="" name="password"/>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <input type="submit" class="btnlogin"  value="Login" name="submit"/>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!--jquery & bootstrap-->
        <script src="authAsset/js/jquery-3.6.1.min.js"></script>
        <script src="authAsset/js/bootstrap.min.js"></script>
        <script src="{{asset('asset/js/sweetalert.js')}}"></script>
        <script>
            @if(session('massage'))
            @if(session('check') == 'login')
            swal({
                title: "{{session('user.first_name')}}",
                text: "{{session('massage')}}",
                icon: "{{session('statusCode')}}",
                button: "ok",
            });

            @elseif(session('check') == 'logout')
            swal({
                {{--title: "{{session('user.first_name')}}",--}}
                text: "{{session('massage')}}",
                icon: "{{session('statusCode')}}",
                button: "ok",
            });
            @else

            @if(session('statusCode') == 'warning')
            swal({
                title: "Warning!",
                text: "{{session('massage')}}",
                icon: "{{session('statusCode')}}",
                button: "ok",
            });
            @else
            swal({
                title: "Good job!",
                text: "{{session('massage')}}",
                icon: "{{session('statusCode')}}",
                button: "ok",
            });
            @endif
            @endif
            @endif
        </script>
    </body>
</html>
