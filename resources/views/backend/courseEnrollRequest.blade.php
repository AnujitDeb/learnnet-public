


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

          <div class="col-lg-12"style="padding-top: 15px;">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Student Enroll Request</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr style="text-align: center">
                                <th>No</th>
                                <th>Course Name</th>
                                <th>Student Email</th>
                                <th>Instructor Email</th>
                                <th>Request Date</th>
                                <th>Transaction ID</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            @php
                            $id = 1;
                            @endphp
                            <tbody style="text-align: center">
                            @foreach($subscribers as $subscriber)
                                @php
                                    $course = \App\Models\Course::find($subscriber->course_id);
                                    $student = \App\Models\User::find($subscriber->student_id);
                                    $instructor = \App\Models\User::find($course->instructor_id);
                                @endphp
                                <tr>
                                    <th>{{$id++}}</th>
                                    <td>{{$course->title}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$instructor->email}}</td>
                                    <td>1{{$subscriber->created_at}}</td>
                                    <td>{{$subscriber->transaction_id}}</td>

                                    @if($subscriber->status == 'approved')
                                        <td>
                                            <span class="label gradient-1 label-pill label-success">Approved</span>
                                        </td>
                                        <td>
                                            <a href="{{route('student-payment-unaprroval', $subscriber)}}" class="btn btn-danger btn-rounded" style="color: white;" >Unapprove</a>
                                        </td>
                                    @else
                                        <td>
                                            <a href="{{route('student-payment-aprroval', $subscriber)}}" class="btn btn-info btn-rounded" style="color: white" >Approve</a>
                                        </td>
                                        <td>
                                            <a href="{{route('student-payment-unaprroval', $subscriber)}}" class="btn btn-danger btn-rounded" style="color: white;" >Unapprove</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
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
