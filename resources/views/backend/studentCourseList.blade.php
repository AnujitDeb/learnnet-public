
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
                <div class="card-title">
                    <h4>Enrolled Courses</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        @if($cnt)
                            <thead>
                            <tr style="text-align: center">
                                <th>No</th>
                                <th>Course Name</th>
                                <th>Instructor Name</th>
                                <th>Enrolled Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @php
                                $id = 1;
                            @endphp

                            @foreach($subscriptions as $subscription)

                                @php
                                    $instructor = \App\Models\User::find($subscription->instructor_id);
                                    $course = \App\Models\Course::find($subscription->course_id);
                                @endphp

                                <tr style="text-align: center">
                                    <th>{{$id++}}</th>
                                    <td>{{$course->title}}</td>
                                    <td>{{$instructor->first_name}}</td>
                                    <td>{{$subscription->updated_at}}</td>
                                    <td>
                                        <a href="{{route('video-play', $course->id)}}" class="btn btn-rounded btn-info">
                                            View
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        @else
                            <h3 style="color: red; text-align: center">No Enrolled Course</h3>
                        @endif
                    </table>
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
