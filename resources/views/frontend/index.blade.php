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

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"
                     style="padding-bottom: 50px">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active"
                             style="background-image: url('frontendAsset/img/sliding/one.jpg'); height: 480px">
                            <!--<div class="carousel-caption">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>-->
                        </div>
                        <div class="carousel-item"
                             style="background-image: url('frontendAsset/img/sliding/two.jpg'); height: 480px">
                            <!--<div class="carousel-caption">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>-->
                        </div>
                        <div class="carousel-item"
                             style="background-image: url('frontendAsset/img/sliding/three.jpg'); height: 480px">
                            <!--<div class="carousel-caption">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>-->
                        </div>
                        <div class="carousel-item"
                             style="background-image: url('frontendAsset/img/sliding/four.jpg'); height: 480px">
                            <!--<div class="carousel-caption">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>-->
                        </div>
                        <div class="carousel-item"
                             style="background-image: url('frontendAsset/img/sliding/five.jpg'); height: 480px">
                            <!--<div class="carousel-caption">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>-->
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </header>

            <!-- Sliding Picture end -->


            <!-- Content Start -->

            <div class="row">
                <!-- Continue Learning Start -->
                <div class="col-xl-6 mb-5">
                    <h2 class="small-title">Courses</h2>
                    <div class="scroll-out">
                        <div class="scroll-by-count" data-count="3">


                            @foreach($courses as $course)
                                <div class="card mb-2">
                                    <div class="row g-0 sh-14">
                                        <div class="col-auto">
                                            <a href="/Course/Detail" class="d-block position-relative h-100">
                                                <img src="frontendAsset/img/course/small/c1.png" alt="alternate text"
                                                     class="card-img card-img-horizontal sw-14 sw-lg-18"/>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                                <div class="w-100">
                                                    <a href="/Course/Detail" class="font-heading mb-1">{{$course->title}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <!-- Continue Learning End -->

                <!-- Recommended Courses Start -->
                <div class="col-xl-6 mb-5">
                    <h2 class="small-title">Recommended for You</h2>

                    @php
                        $count = 1;
                    @endphp

                    @foreach($courses as $course)
                        <div class="card w-100 sh-50 sh-md-40 h-xl-100-card hover-img-scale-up position-relative">
                            <img src="frontendAsset/img/banner/laravel.png" class="card-img h-100 scale position-absolute"
                                 alt="card image"/>
                            <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                                <div>
                                    <div class="cta-1 mb-3 text-white w-75 w-sm-50 opacity-75">{{$course->title}}
                                    </div>
                                    <div class="w-50 text-white mb-3 opacity-75">
                                        {{$course->description}}
                                    </div>
                                    <div class="text-muted text-overline text-small">
                                        <del>{{$course->original_price.'(৳)'}}</del>
                                    </div>
                                    <div>{{$course->discounted_price.'(৳)'}}</div>
                                </div>
                                <div>
                                    <a href="/Course/Detail"
                                       class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                        <i data-acorn-icon="chevron-right"></i>
                                        <span>View</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if($count)
                            @break
                        @endif
                    @endforeach

                </div>
                <!-- Recommended Courses End -->
            </div>


            <!-- Trending Courses Start -->
            <h2 class="small-title">Trending Courses</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 g-2 mb-5">


                @foreach($courses as $course)
                    <div class="col">
                        <div class="card h-100">
                            <img src="frontendAsset/img/course/small/course-4.webp" class="card-img-top sh-22"
                                 alt="card image"/>
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">{{$course->title}}</a></h5>
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



                {{--<div class="col">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-5.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">14 Facts
                                    About Sugar</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(221)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 36.50</del>
                                </div>
                                <div>$ 15.25</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <span
                            class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-3 z-index-1">POPULAR</span>
                        <img src="frontendAsset/img/course/small/course-6.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Apple
                                    Cake Recipe</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(572)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 51.00</del>
                                </div>
                                <div>$ 36.80</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-7.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Dough for
                                    the Molds</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 18.25</del>
                                </div>
                                <div>$ 11.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-none d-xl-block">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-9.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Fruit
                                    Decorations</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(472)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 24.00</del>
                                </div>
                                <div>$ 14.90</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 g-2 mb-5">
                <div class="col">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-4.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Introduction
                                    to Bread Making</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(39)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 42.25</del>
                                </div>
                                <div>$ 27.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-5.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">14 Facts
                                    About Sugar</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(221)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 36.50</del>
                                </div>
                                <div>$ 15.25</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <span
                            class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-3 z-index-1">POPULAR</span>
                        <img src="frontendAsset/img/course/small/course-6.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Apple
                                    Cake Recipe</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(572)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 51.00</del>
                                </div>
                                <div>$ 36.80</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-7.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Dough for
                                    the Molds</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 18.25</del>
                                </div>
                                <div>$ 11.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-none d-xl-block">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-9.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Fruit
                                    Decorations</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(472)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 24.00</del>
                                </div>
                                <div>$ 14.90</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 g-2 mb-5">
                <div class="col">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-4.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Introduction
                                    to Bread Making</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(39)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 42.25</del>
                                </div>
                                <div>$ 27.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-5.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">14 Facts
                                    About Sugar</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(221)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 36.50</del>
                                </div>
                                <div>$ 15.25</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <span
                            class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-3 z-index-1">POPULAR</span>
                        <img src="frontendAsset/img/course/small/course-6.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Apple
                                    Cake Recipe</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(572)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 51.00</del>
                                </div>
                                <div>$ 36.80</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-7.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Dough for
                                    the Molds</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 18.25</del>
                                </div>
                                <div>$ 11.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-none d-xl-block">
                    <div class="card h-100">
                        <img src="frontendAsset/img/course/small/course-9.webp" class="card-img-top sh-22"
                             alt="card image"/>
                        <div class="card-body">
                            <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Fruit
                                    Decorations</a></h5>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true"
                                            data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(472)</div>
                            </div>
                            <div class="card-text mb-0">
                                <div class="text-muted text-overline text-small">
                                    <del>$ 24.00</del>
                                </div>
                                <div>$ 14.90</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            <!-- Trending Courses End -->

        </div>
        <!-- Footer Start -->
@include('frontend/include/footer')
