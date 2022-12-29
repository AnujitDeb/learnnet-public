{{--Header start--}}

@include('frontend.include.header')

{{--Header end--}}

    <main style="padding-bottom: 0px;">


        <div class="container">
            <!-- Title and Top Buttons Start -->

            @include('frontend.include.UpperNavbar')

            <!-- Nav bar end -->

            <!-- Sliding Picture Start -->

            <header>


            <!-- Trending Courses Start -->
            <h2 class="small-title">Courses</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 g-2 mb-5">


                @foreach($courses as $course)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('/courseThumbnail/'.$course->thumbnail)}}" class="card-img-top sh-22"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="{{route('video-play', $course->id)}}" class="body-link stretched-link">{{$course->title}}</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small">
                                        <del>{{$course->original_price.'(৳)'}}</del>
                                    </div>
                                    <div>{{$course->discounted_price.'(৳)'}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            <!-- Trending Courses End -->

        </div>
        <!-- Footer Start -->
@include('frontend/include/footer')
