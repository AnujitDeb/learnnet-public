


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
                                    @if($user->image)
                                        <img class="mr-3" src="{{asset('/profilePic/'.$user->image)}}" width="80" height="80" alt="">
                                    @else
                                        <img class="mr-3" src="asset/images/avatar.png" width="80" height="80" alt="">
                                    @endif
                                    <div class="media-body">
                                        <h3 class="mb-1">{{$user->first_name}}</h3>
                                        <p class="text-muted mb-1"><span style="color: green">{{$user->type}}</span></p>
                                    </div>
                                </div>

                                {{--<h4>About Me</h4>
                                <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>--}}
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile :</strong> <span>{{$user->phone}}</span></li>
                                    <li><strong class="text-dark mr-4">Email :</strong> <span>{{$user->email}}</span></li>
                                </ul>
                            </div>

                            <br>


                            <div style="display: flex; padding-bottom: 5px;">
                                <div class="col-md-6">
                                    <h4 class="card-title">Information</h4>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle">
                                    <!-- <thead>
                                        <tr>
                                            <th scope="col">Task</th>
                                            <th scope="col">Progress</th>
                                            <th scope="col">Deadline</th>
                                            <th scope="col">Label</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead> -->
                                    <tbody>
                                    <tr>
                                        <td>First Name</td>
                                        <td style="color: black">{{$user->first_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td style="color: black">{{$user->last_name}}</td>
                                    </tr>
                                    {{--<tr>
                                        <td>Address</td>
                                        <td>27/1/A, Dhanmondi, Dhaka</td>
                                    </tr>--}}
                                    <tr>
                                        <td>Institution</td>
                                        @if($user->institution)
                                            <td style="color: black">{{$user->institution}}</td>
                                        @else
                                            <td style="color: red">Not given!!!</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        @if($user->country)
                                            <td style="color: black">{{$user->country}}</td>
                                        @else
                                            <td style="color: red">Not given!!!</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>Phone no</td>
                                        <td style="color: black">{{$user->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td style="color: black">{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Skills</td>
                                        @if($user->skill)
                                            <td style="color: black">{{$user->skill}}</td>
                                        @else
                                            <td style="color: red">Not given!!!</td>
                                        @endif
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
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
