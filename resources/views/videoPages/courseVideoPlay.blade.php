<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" videoShow/css/all.css"/>
    <link rel="stylesheet" href=" videoShow/css/bootstrap.css"/>
    <link rel="stylesheet" href=" videoShow/css/style.css"/>
    <title>Learnnet</title>
</head>
<body>

<!-- Navbar section start -->
<nav class="navbar navbar-expand-md navbar-light bg-black shadow mb-5" style="padding-bottom: 10px">
    <div class="container">
        <a href="{{route('learnnet')}}" class="navbar-brand text-uppercase fw-bold text-white">Learnnet</a>
        <ul class="navbar-nav ">
            <li><a href="{{route('logout')}}" class="btn btn-primary">Logout</a></li>
        </ul>
    </div>
</nav>
<!-- Navbar section end -->


<!-- Main video section start -->
<div class="container-1" style="margin-top: -40px">
    <div class="col-md-12">
        <div class="main-video" style="height: max-content">

            <div class="video iframe-container">
                <iframe width="" height="" src="{{$mainVideo->video_link}}" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>

            <div class="">
                <h4 class="title">{{$mainVideo->title}}<span class="">
                                @if($mainVideo->is_free == 'public')
                            <i class="fa-solid fa-earth-americas text-white" style="font-size: 15px;"></i>
                        @else
                            <i class="fa-solid fa-lock text-white" style="font-size: 15px;"></i>
                        @endif
                            </span></h4>
                <div class="">
                    <h5 class="text-end" style="margin-top: -10px; margin-right:140px;">
                        <span class="bg-warning  rounded-3">&ensp;<s>{{$course->original_price}}</s> {{---20%--}}<i
                                class="text-danger fw-bold">{{$course->discounted_price}}</i>&ensp;</span>
                    </h5>
                    @php
                        $result = 0;
                        $videoId = $mainVideo->id;
                        $checkSubscibe = \App\Models\Subscription::where('course_id', $course->id)->get();
                        foreach ($checkSubscibe as $check){
                            if(($check->student_id == session('user.id') && $check->status == 'pending')){
                                $result = 1;
                                break;
                            }
                            else if(($check->student_id == session('user.id') && $check->status == 'approved')){
                                $result = 2;
                                break;
                            }
                        }
                    @endphp
                    @if($result == 1)
                        <a href="{{route('payment', ['course' => $course, 'videoId' => $videoId])}}"
                           class="btn btn-danger float-end"
                           style="margin-top: -40px; margin-right:20px; pointer-events: none">Buy Now</a>
                    @elseif($result == 0)
                        <a href="{{route('payment', ['course' => $course, 'videoId' => $videoId])}}"
                           class="btn btn-danger float-end" style="margin-top: -40px; margin-right:20px;">Buy Now</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Main video section start -->


    <!-- Video list start -->
    <div class="col-md-12">
        <div class="video-list">

            @foreach($videos as $video)
                @if($video->is_free == 'public')
                    <a href="{{route('video-show', $video->id)}}" style="text-decoration: none;">
                        <div class="vid fa-solid fa-earth-americas text-white">
                            <img src="{{asset('/thumbnails/'.$video->thumbnail)}}" alt="" height="50" width="50"/>
                            <h3 class="title">{{$video->title}}</h3>
                        </div>
                    </a>
                @else
                    <a href="{{route('video-show', $video->id)}}" style="pointer-events: none; text-decoration: none;">
                        <div class="vid fa-solid fa-lock text-white">
                            <img src="{{asset('/thumbnails/'.$video->thumbnail)}}" alt="" height="50" width="50"/>
                            <h3 class="title">{{$video->title}}</h3>
                        </div>
                    </a>
                @endif
            @endforeach


        </div>
    </div>
</div>
<!-- Video list start -->

<!-- modal start -->


<!-- modal end -->


<!-- Course details section start -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card border-0 bg-dark text-white">
                    <div class="card-header bg-dark shadow">
                        <h1>Description</h1>
                    </div>
                    <div class="card-body">
                        {{$course->description}}
                    </div>
                </div>
            </div>

            <div class="col-md-9 mb-3">
                <div class="card bg-dark text-white">
                    <div class="card-header shadow">
                        <h1>Prerequisite courses</h1>
                    </div>
                    <div class="card-body">
                        {{$course->prerequisite}}
                    </div>
                </div>
            </div>

            <div class="col-md-9 mb-3">
                <div class="card bg-dark text-white">
                    <div class="card-header shadow">
                        <h1>Course Materials</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            @if($materials)
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Materials</th>
                                    <th scope="col">title</th>
                                    <th scope="col">Publish Date</th>
                                    <th scope="col" style="padding-left: 25px;">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $matId = 1;
                                @endphp
                                @foreach($materials as $material)
                                    <tr>
                                        <th scope="row">{{$matId++}}</th>
                                        <td>
                                            <a href="{{url('/material-view'.$material->fileName)}}">{{$material->fileName}}</a>
                                        </td>
                                        <td>{{$material->title}}</td>

                                        <td>{{$material->created_at}}</td>
                                        <td>
                                            <a href="{{route('mat-delete', ['id' => $material->id,'course_id' => $course->id])}}"
                                               class="btn btn-rounded btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            @else
                                <h5 style="text-align: center; color: red">No Material Uploaded</h5>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Course details section end -->


<!-- Footer start -->
<footer class="bg-black py-3">
    <div class="container">
        <div class="row">
            <h5 class="text-center text-white">Copyright © Designed & Developed by Learnnet 2022</h5>
        </div>
    </div>
</footer>
<!-- Footer end -->


<!-- script start -->
<script>
    let listVideo = document.querySelectorAll('.video-list .vid');
    let mainVideo = document.querySelector('.main-video video');
    let title = document.querySelector('.main-video .title');

    listVideo.forEach(video => {
        video.onclick = () => {
            listVideo.forEach(vid => vid.classList.remove('active'));
            video.classList.add('active');
            if (video.classList.contains('active')) {
                let src = video.children[0].getAttribute('src');
                mainVideo.src = src;
                let text = video.children[1].innerHTML;
                title.innerHTML = text;
            }

        };
    });
</script>

<script src=" videoShow/js/jquery-3.6.1.js"></script>
<script src=" videoShow/js/bootstrap.bundle.js"></script>

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

<!-- script end -->

</body>
</html>
