<div>
    <div class="page-title-container  " >
        <div class="row">
            <!-- Title Start -->
            <div class="col-4 col-md-3">
                <h1 class="mb-0 pb-0 display-4" id="title">LEARNNET</h1>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                    <ul class="breadcrumb pt-0">
                        <!--<li class="breadcrumb-item"><a href="/">Home</a></li>-->
                        <li class="breadcrumb-item">{{session('user.type')}}</li>
                    </ul>
                </nav>
            </div>

            <div class="col-8 col-md-5">
                <form action="">
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
