


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
                        <h4>Student Transaction Statement</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>User ID</th>
                                    <th>Course Name</th>
                                    <th>Transaction ID</th>
                                    <th>Amount</th>
                                    <th>Payment Method</th>
                                    <th>Request Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center">
                            @php
                                $id = 1;
                            @endphp
                            @foreach($transactions as $transaction)
                                @php
                                    $student = \App\Models\User::find($transaction->student_id);
                                    $course = \App\Models\Course::find($transaction->course_id);
                                @endphp
                                <tr>
                                    <th>{{$id++}}</th>
                                    <th>{{$student->first_name}}</th>
                                    <th>{{$student->id}}</th>
                                    <th>{{$course->title}}</th>
                                    <td>{{$transaction->transaction_id}}</td>
                                    <td>{{$transaction->payable_amount . '(???)'}}</td>
                                    <td>{{$transaction->transaction_method}}</td>
                                    <td>{{$transaction->updated_at}}</td>
                                    @if($transaction->status == 'approved')
                                        <td><span class="label gradient-1 label-pill label-primary">Approved</span></td>
                                    @elseif($transaction->status == 'pending')
                                        <td><span class="label gradient-3 label-pill label-secondary">Pending</span></td>
                                    @else
                                        <td><span class="label gradient-2 label-pill label-primary">Rejected</span></td>
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
