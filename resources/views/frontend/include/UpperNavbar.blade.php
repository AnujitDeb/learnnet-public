<div>
    <div class="page-title-container  " >
        <div class="row">
            <!-- Title Start -->
            <div class="col-4 col-md-3">
                <a href="{{route('learnnet')}}"><h1 class="mb-0 pb-0 display-4" id="title">LEARNNET</h1></a>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                    <ul class="breadcrumb pt-0">
                        <!--<li class="breadcrumb-item"><a href="/">Home</a></li>-->
                        @if(session()->has('user'))
                            <li class="breadcrumb-item">{{session('user.type')}}</li>
                        @endif
                    </ul>
                </nav>
            </div>

            <div class="col-8 col-md-5">
                <form action="{{route('searched-courses', 'search')}}" method="get">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Search a course...">
                        <button class="btn btn-primary">
                            <i data-acorn-icon="search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-4 float-end" style="padding-top: 5px;">
                <form action="">
                    <div class="input-group float-end justify-content-end" >

                            @if(!session()->has('user'))
                                <div style="padding-right: 5px;">
                                    <a href="{{url('login')}}">
                                        <button class="btn btn-outline-primary" type="button">
                                            Login
                                        </button>
                                    </a>
                                </div>

                                <div>
                                    <a href="{{url('register')}}">
                                        <button class="btn btn-outline-primary" type="button">
                                            Register
                                        </button>
                                    </a>
                                </div>
                            @else
                                @if(session('user.type') == 'instructor')
                                    <div style="padding-right: 5px; pointer-events: none; padding-right: 10px">

                                        @php
                                            $instructor = \App\Models\Subscription::where('instructor_id', session('user.id'));
                                            $sumOfSubscription = $instructor->where('status', 'approved')->sum('payable_amount');
                                            $sumOfSubscription = $sumOfSubscription - (($sumOfSubscription * 25) / 100);

                                            $instructorWithdraw = \App\Models\InstructorCreditNote::where('instructor_id', session('user.id'));
                                            $sumOfWithdraw = $instructorWithdraw->where('status', 'disbursed')->sum('amount');

                                            $Instructorbalance = $sumOfSubscription - $sumOfWithdraw;
                                        @endphp

                                        <a href="#">
                                            @if($Instructorbalance == 0)
                                                <button class="btn btn-outline-danger" type="button">
                                                    {{$Instructorbalance.'(৳)'}}
                                                </button>
                                            @else
                                                <button class="btn btn-outline-success" type="button">
                                                    {{$Instructorbalance.'(৳)'}}
                                                </button>
                                            @endif
                                        </a>
                                    </div>
                               @endif
                                <div style="padding-right: 5px;">
                                    <a href="{{route('logout')}}">
                                        <button class="btn btn-outline-primary" type="button">
                                            Logout
                                        </button>
                                    </a>
                                </div>
                            @endif

                    </div>
                </form>
            </div>

            <!-- Title End -->
        </div>
        <!-- Title and Top Buttons End -->


    </div>
    @yield('content')

</div>
