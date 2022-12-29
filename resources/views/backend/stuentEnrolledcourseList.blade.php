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
                    <h4>Enrolled Students</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        @if($cnt)
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Student Name</th>
                                    <th>Course Name</th>
                                    <th>Enrolled Date</th>
                                    <th>Amount</th>

                                </tr>
                            </thead>
                            <tbody>

                            @php
                                $id = 1;
                            @endphp

                            @foreach($subscriptions as $subscription)

                                @php
                                    $student = \App\Models\User::find($subscription->student_id);
                                    $course = \App\Models\Course::find($subscription->course_id);
                                @endphp
                                <tr>
                                    <th>{{$id++}}</th>
                                    <td>{{$student->first_name}}</td>
                                    <td>{{$course->title}}</td>
                                    <td>{{$subscription->updated_at}}</td>
                                    <td><span class="label gradient-1 label-pill label-primary">{{$course->discounted_price . ' (৳)'}}</span></td>
                                </tr>
                            @endforeach
                        @else
                            <h3 style="color: red; text-align: center">No Enrolled Student</h3>
                        @endif
                            </tbody>
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
