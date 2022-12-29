







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
                    <h4>Instructor Withdrawal Requested List</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Instructor Name</th>
                            <th>Instructor Phone</th>
                            <th>Account Number</th>
                            <th>Requested amount</th>
                            <th>Payment Method</th>
                            <th>Requested Date</th>
                            <th colspan="3">Action</th>
                        </tr>
                        </thead>
                        <tbody style="text-align: center">
                            @php
                                $id = 1;
                            @endphp


                            @foreach($withdrawalRequest as $request)
                                @if($request->status != 'rejected')
                                    <tr>
                                        <th>{{$id++}}</th>
                                        <td>{{$request->instructor_name}}</td>
                                        <td>{{$request->instructor_phone}}</td>
                                        <td>{{$request->account_number}}</td>
                                        <td>{{$request->amount}}</td>
                                        <td>{{$request->payment_method}}</td>
                                        <td>{{$request->created_at}}</td>
                                        @if($request->status == 'disbursed')
                                            <td><span class="label gradient-1 label-pill label-success">Disbursed</span></td>
                                        @else
                                            <td>
                                                <a href="{{route('disburse', $request->id)}}" class="btn btn-info btn-rounded" style="color: white" >Disburse</a>
                                            </td>
                                        @endif
                                        @if($request->status == 'rejected')
                                            <td>
                                                <a href="{{route('reject', $request->id)}}" class="btn btn-danger btn-rounded" style="color: white;  pointer-events: none; cursor: not-allowed;" >Cancel</a>
                                            </td>
                                        @else
                                            <td>
                                                <a href="{{route('reject', $request->id)}}" class="btn btn-danger btn-rounded" style="color: white;" >Cancel</a>
                                            </td>
                                        @endif
                                    </tr>
                                @endif
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
