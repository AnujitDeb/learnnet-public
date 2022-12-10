<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="authAsset/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="authAsset/css/style.css"/>

        <title>Registration</title>
    </head>
    <body>

    {{--Error massage--}}{{--
    @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif--}}


        <!-- nav -->
        <nav class="navbar navbar-expand bg-light navbar-lite shadow">
            <div class="container">
                <a href="{{url('learnnet')}}" class="navbar-brand "><h3 class="text-uppercase font-weight-bold ">Learnnet</h3></a>
                <ul class="navbar-nav font-weight-bold">

                    <li><a href="{{url('learnnet')}}" class="nav-link mx-2">Home</a></li>
                    <li><a href="{{url('login')}}" class="nav-link mx-2">Login</a></li>
                    <li><a href="{{url('register')}}" class="nav-link mx-2">Sign Up</a></li>
                </ul>
            </div>
        </nav>

        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <!-- <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/> -->
                    <h3>Welcome to Learnnet</h3>
                    {{--<p>You are 30 seconds away from earning your own money!</p>--}}
                    <a href="{{url('login')}}"><input type="submit" name="" value="Login"/></a><br/>
                </div>
                <div class="col-md-9 register-right">


                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Instructor</a>
                        </li>
                    </ul>




                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <h3 class="register-heading">Register as a Student</h3>
                                    @error('title')<span class="text-danger">{{$message}}</span>@enderror
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name *" value="{{old('first_name')}}" name="first_name"/>
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control mt-2  @error('last_name') is-invalid @enderror" placeholder="Last Name *" value="{{old('last_name')}}" name="last_name" />
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control mt-2 @error('email') is-invalid @enderror"  placeholder="Your Email *" value="{{old('email')}}" name="email" />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control  @error('phone') is-invalid @enderror" placeholder="Your Phone Number*" value="{{old('phone')}}" name="phone"/>
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="row md-3 mb-3">
                                            <div class="col-md-3">Image:</div>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"/>

                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password *" value="{{old('password')}}" name="password" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control mt-2  @error('confirm_password') is-invalid @enderror" placeholder="Confirm Password *" value="{{old('password')}}" name="confirm_password" />
                                            @error('confirm_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control  @error('institution') is-invalid @enderror" placeholder="Institution *" value="{{old('institution')}}" name="institution"/>
                                            @error('institution')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control  @error('country') is-invalid @enderror" placeholder="Country *" value="{{old('country')}}" name="country"/>
                                            @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" value="student" name="type">
                                    </div>

                                    <input type="submit" class="btnRegister col-md-4 mx-auto mt-0"  value="Register" name="student"/>
                                </div>
                                </form>
                            </div>

                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <h3  class="register-heading">Apply and Register as an Instructor</h3>
                                    @error('title')<span class="text-danger">{{$message}}</span>@enderror
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control  @error('first_name') is-invalid @enderror" placeholder="First Name *" value="" name="first_name" />
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control mt-2  @error('last_name') is-invalid @enderror" placeholder="Last Name *" value="" name="last_name" />
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control mt-2  @error('email') is-invalid @enderror" placeholder="Your Email *" value="" name="email" />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control  @error('phone') is-invalid @enderror" placeholder="Your Phone Number*" value="{{old('phone')}}" name="phone"/>
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password *" value="{{old('password')}}" name="password" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control mt-2  @error('confirm_password') is-invalid @enderror" placeholder="Confirm Password *" value="{{old('password')}}" name="confirm_password" />
                                            @error('confirm_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control  @error('institution') is-invalid @enderror" placeholder="Institution *" value="{{old('institution')}}" name="institution"/>
                                            @error('institution')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control  @error('country') is-invalid @enderror" placeholder="Country *" value="{{old('country')}}" name="country"/>
                                            @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 ms-auto mb-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control mt-2  @error('skill') is-invalid @enderror" placeholder="Skills *" value="{{old('skills')}}" name="skill"/>
                                            @error('skill')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="row md-3 mb-3">
                                            <div class="col-md-3">Image:</div>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"/>

                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>



                                    <div class="form-group">
                                        <input type="hidden" value="instructor" name="type">
                                    </div>

                                    <input type="submit" class="btnRegister col-md-4 mx-auto mt-0"  value="Register" name="instructor"/>

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
    </body>
</html>
