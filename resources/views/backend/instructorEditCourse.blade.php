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

    <div class="col-lg-12" style="padding-top: 15px;">
        <div class="card">
            <div class="card-body">
                <div style="display: flex">
                    <div class="col-md-8"><h4 class="card-title">Course View</h4></div>
                </div>
                <div class="table-responsive">
                    <form action="" method="">
                        <table class="table header-border">
                            <thead>
                            <tr style="text-align: center">
                                <th>Course Title</th>
                                <th>Description</th>
                                <th>Prerequisite</th>
                                <th>Price</th>
                                <th>Publish Date</th>
                                <th>Edit</th>
                                <th>View</th>
                                <th>Delete</th>
                                {{--<th>Publish Request</th>--}}

                            </tr>
                            </thead>
                            <tbody>
                            <tr class="table" style="text-align: center">
                                <td>{{$course->title}}</td>
                                <td>{{$course->description}}</td>
                                <td>{{$course->prerequisite}}</td>
                                <td>{{$course->discounted_price.'(৳)'}}</td>
                                <td>{{$course->created_at}}</td>

                                <td>
                                    <a href="{{route('edit-course', $course->id)}}" class="btn btn-rounded btn-primary">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('video-play', $course->id)}}" class="btn btn-rounded btn-secondary">
                                        view
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('/course-delete'.$course->id)}}" class="btn btn-rounded btn-danger">
                                        Delete
                                    </a>
                                </td>
                                    {{--<td>
                                        <div class="rounded-button">
                                            <button type="button" class="btn mb-1 btn-rounded btn-info">Request</button>
                                        </div>
                                    </td>--}}
                            </tr>


                        </table>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body" style="background-color: #eaeaf8">
                                    <div style="text-align: right">
                                        <a href="{{url('/course-video'.$course->id)}}" class="btn btn-rounded btn-info">
                                            Add
                                        </a>
                                    </div>
                                    <h4 class="card-title"></h4>
                                    <p class="text-muted"><code></code>
                                    </p>
                                    <div id="accordion-three" class="accordion">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6"><i class="fa" aria-hidden="true"></i> Videos</h5>
                                            </div>
                                            <div id="collapseThree6" class="collapse" data-parent="#accordion-three">
                                                <div class="card-body">

                                                    <table class="table header-border">
                                                        @if($videos)
                                                            <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Thumbnails</th>
                                                                <th>Video Tittle</th>
                                                                <th>Video Duration</th>
                                                                <th>Publish Date</th>
                                                                <th>Status</th>
                                                                <th style="padding-left: 25px;">Edit</th>
                                                                <th style="padding-left: 25px;">Delete</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @php
                                                                $id = 1;
                                                            @endphp
                                                            @foreach($videos as $video)
                                                                <tr>
                                                                    <td>{{$id++}}</td>
                                                                    <td><img src="{{asset('/thumbnails/'.$video->thumbnail)}}" style="width: 50px;" alt="image" ></td>
                                                                    <td>{{$video->title}}</td>
                                                                    <td>{{$video->duration}}</td>
                                                                    <td>{{$video->created_at}}</td>
                                                                    @if($video->is_free == 'public')
                                                                        <td><span class="label gradient-1 label-pill label-primary">{{$video->is_free}}</span></td>
                                                                    @else
                                                                        <td><span class="label gradient-9 label-pill label-danger">{{$video->is_free}}</span></td>
                                                                    @endif
                                                                    <td>
                                                                        <a href="{{route('video-edit', $video->id)}}" class="btn btn-rounded btn-info">
                                                                            Edit
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="{{route('video-delete', ['id' => $video->id,'course_id' => $course->id])}}" class="btn btn-rounded btn-danger">
                                                                            Delete
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        @else
                                                            <h5 style="text-align: center; color: red">No Videos Uploaded</h5>
                                                        @endif
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body" style="background-color: #eaeaf8">
                                    <div style="text-align: right">
                                        <a href="{{url('/course-material'.$course->id)}}" class="btn btn-rounded btn-info">
                                            Add
                                        </a>
                                    </div>
                                    <h4 class="card-title"></h4>
                                    <p class="text-muted"><code></code>
                                    </p>
                                    <div id="accordion-three" class="accordion">

                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5"><i class="fa" aria-hidden="true"></i> Materials</h5>
                                            </div>
                                            <div id="collapseTwo5" class="collapse" data-parent="#accordion-three">
                                                <div class="card-body">

                                                    <table class="table header-border">
                                                        @if($materials)
                                                            <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Materials</th>
                                                                <th>title</th>
                                                                <th>Publish Date</th>
                                                                <th style="padding-left: 25px;">Delete</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @php
                                                                $matId = 1;
                                                            @endphp
                                                            @foreach($materials as $material)
                                                                <tr>
                                                                    <td>{{$matId++}}</td>
                                                                    <td><a href="{{url('/material-view'.$material->fileName)}}">{{$material->fileName}}</a></td>
                                                                    <td>{{$material->title}}</td>

                                                                    <td>{{$material->created_at}}</td>
                                                                    <td>
                                                                        <a href="{{route('mat-delete', ['id' => $material->id,'course_id' => $course->id])}}" class="btn btn-rounded btn-danger">
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
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>


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
