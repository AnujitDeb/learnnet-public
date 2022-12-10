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


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Your Course</h4>
                        <form action="{{route('course-list.index')}}" method="post">
                            @csrf
                            @if($courses)
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr style="text-align: center">
                                            <th>No</th>
                                            <th>Couse name</th>
                                            <th>Materials</th>
                                            <th>Videos</th>
                                            <th>Publish Date</th>
                                            <th>Price</th>
                                            <th>Course status</th>
                                            {{--<th>Approval status</th>--}}
                                            {{--<th>Material</th>--}}
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $id = 1;
                                        @endphp

                                        @foreach($courses as $course)

                                            <tr class="table-success" style="text-align: center">
                                                <th>{{$id++}}</th>
                                                <td><a href="courseVideoList.html">{{$course['title']}}</a></td>
                                                <td>{{$course['material_count']}}</td>
                                                <td>{{$course['video_count']}}</td>
                                                <td>{{$course['created_at']}}</td>
                                                <td>{{$course['discounted_price'].'(৳)'}}</td>
                                                @if($course['status'] == 'active')
                                                    <td><span
                                                            class="label gradient-1 label-pill label-primary">{{$course['status']}}</span>
                                                    </td>
                                                @else
                                                    <td><span
                                                            class="label gradient-9 label-pill label-danger">{{$course['status']}}</span>
                                                    </td>
                                                @endif
                                                {{--<td><span class="label gradient-1 label-pill label-secondary">Draft</span></td>--}} {{--Draft, Pending, Approved, Disapproved--}}
                                                {{--<td>
                                                    <a href="{{url('/course-material'.$course->id)}}" class="btn btn-rounded btn-success">
                                                        Add
                                                    </a>
                                                </td>--}}
                                                <td>
                                                    <a href="{{url('/course-edit'.$course->id)}}"
                                                       class="btn btn-rounded btn-info">
                                                        Edit
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="rounded-button" style="text-align: center">
                                                        <a href="{{url('/course-delete'.$course->id)}}"
                                                           class="btn btn-rounded btn-danger">
                                                            Delete
                                                        </a>

                                                        {{--<form action="{{route('course.destroy', $course->id)}}" method="GET">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn mb-1 btn-rounded btn-danger">Delete</button>
                                                        </form>--}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <h3 style="text-align: center; color: red">There is no Course to show !!!</h3>
                            @endif

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
