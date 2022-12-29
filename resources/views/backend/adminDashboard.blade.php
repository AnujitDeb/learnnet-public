

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

        @if(session()->has('user'))
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Products Sold</h3>
                                <div class="d-inline-block">

                                    @php
                                        $allSubscription = \App\Models\Subscription::all();
                                        $sumOfSubscription = $allSubscription->where('status', 'approved')->sum('payable_amount');
                                    @endphp

                                    <h2 class="text-white">{{$sumOfSubscription.'(৳)'}}</h2>
                                    <p class="text-white mb-0">{{$date}}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Net Profit</h3>
                                <div class="d-inline-block">

                                    @php
                                        $allSubscription = \App\Models\Subscription::all();
                                        $sumOfSubscription = $allSubscription->where('status', 'approved')->sum('payable_amount');
                                        $profit = ($sumOfSubscription * 25) / 100;
                                    @endphp

                                    <h2 class="text-white">{{$profit .'(৳)'}}</h2>
                                    <p class="text-white mb-0">{{$date}}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Number of Students</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$studentCnt}}</h2>
                                    <p class="text-white mb-0">{{$date}}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Number of Instructors</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$instructorCnt}}</h2>
                                    <p class="text-white mb-0">{{$date}}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @else
            <h1 style="color: white; text-align: center">Please Log In</h1>
        @endif

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
