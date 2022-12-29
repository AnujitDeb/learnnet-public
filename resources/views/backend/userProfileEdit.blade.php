


<!--**********************************
        Header start
    ***********************************-->

@include('backend/include/header')

<!--**********************************
        Header end ti-comment-alt
    ***********************************-->


<!--**********************************
        Sidebar start
    ***********************************-->

@include('backend/include/sidebar')

<!--**********************************
        Sidebar end
    ***********************************-->


<!--**********************************
    Content body start
***********************************-->
<div class="content-body">


    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="media align-items-center mb-4">
                                @if(session()->has('user') && (session('user.image') != null))
                                    <img class="mr-3" src="{{asset('/profilePic/'.session('user.image'))}}" width="80" height="80" alt="">
                                @else
                                    <img class="mr-3" src="asset/images/avatar.png" width="80" height="80" alt="">
                                @endif
                                <div class="media-body">
                                    <h3 class="mb-1">{{session('user.first_name')}}</h3>
                                    <p class="text-muted mb-1">{{session('user.skill')}}</p>
                                </div>
                            </div>

                            {{--<h4>About Me</h4>
                            <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>--}}
                            <ul class="card-profile__info">
                                <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>{{session('user.phone')}}</span></li>
                                <li><strong class="text-dark mr-4">Email</strong> <span>{{session('user.email')}}</span></li>
                            </ul>
                        </div>

                        <br>


                        <div style="display: flex; padding-bottom: 5px;">
                            <div class="col-md-6">
                                <h4 class="card-title">Edit Profile Information</h4>
                            </div>
                        </div>

                        <form action="{{route('profile-update')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">First Name :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{session('user.first_name')}}"/>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Last Name :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{session('user.last_name')}}"/>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Email Address :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{session('user.email')}}"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Phone Number :</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{session('user.phone')}}"/>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Password :</div>
                                <div class="col-md-9">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" placeholder="******"/>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Confirm Password :</div>
                                <div class="col-md-9">
                                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" value="" placeholder="******"/>
                                    @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Institute :</div>
                                <div class="col-md-9">
                                    @if(session('user.institution'))
                                        <input type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" value="{{session('user.institution')}}"/>
                                    @else
                                        <input type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" placeholder="Not given!!!"/>
                                    @endif

                                    @error('institution')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Country :</div>
                                <div class="col-md-9">
                                    @if(session('user.country'))
                                        <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{session('user.country')}}"/>
                                    @else
                                        <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" placeholder="Not given!!!"/>
                                    @endif
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Skill :</div>
                                <div class="col-md-9">
                                    @if(session('user.skill'))
                                        <input type="text" class="form-control @error('skill') is-invalid @enderror" name="skill" value="{{session('user.skill')}}"/>
                                    @else
                                        <input type="text" class="form-control @error('skill') is-invalid @enderror" name="skill" placeholder="Not given!!!"/>
                                    @endif
                                    @error('skill')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Profile Picture :</div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"/>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="hidden" value="{{session('user.id')}}" name="user_id">
                            </div>

                            <div class="" style="text-align: center">
                                <input type="submit" class="form-control btn btn-success btn-rounded text-white" name="update"
                                       value="Update" style="background-color: #7571F9; width: max-content;"/>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- #/ container -->
</div>
<!--**********************************
    Content body end
***********************************-->



<!--**********************************
    Footer start
***********************************-->

@include('backend/include/footer')

<!--**********************************
            Footer end
        ***********************************-->
