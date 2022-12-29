

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
                    <h4>Transaction Statement</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Request Date</th>
                            <th>Updated Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody style="text-align: center">
                            @php
                                $id = 1;
                            @endphp
                            @foreach($transactions as $transaction)
                                <tr>
                                    <th>{{$id++}}</th>
                                    <td>{{$transaction->amount . '(৳)'}}</td>
                                    <td>{{$transaction->payment_method}}</td>
                                    <td>{{$transaction->created_at}}</td>
                                    <td>{{$transaction->updated_at}}</td>
                                    @if($transaction->status == 'requested')
                                        <td><span class="label gradient-3 label-pill label-primary">Pending</span></td>
                                    @elseif($transaction->status == 'disbursed')
                                        <td><span class="label gradient-0 label-pill label-success">Disbursed</span></td>
                                    @else
                                        <td><span class="label gradient-2 label-pill label-primary">Rejected</span></td>
                                    @endif

                                    {{--<td><span class="label gradient-1 label-pill label-success">Approved</span></td>
                                    <td><span class="label gradient-3 label-pill label-primary">Void</span></td>
                                    <td><span class="label gradient-7 label-pill label-primary">Hold</span></td>--}}
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
