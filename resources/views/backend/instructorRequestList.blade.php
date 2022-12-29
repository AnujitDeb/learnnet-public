


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
                        <h4 class="card-title">Instructor requested list</h4>
                        <form action="" method="get">
                            @csrf

                            @if($instructors)
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Instructor Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Requested Date</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $id = 1;
                                        @endphp


                                        @foreach($instructors as $instructor)
                                            <tr>
                                                <th>{{$id++}}</th>
                                                <td>{{$instructor->first_name}}</td>
                                                <td>{{$instructor->phone}}</td>
                                                <td>{{$instructor->email}}</td>
                                                <td>{{$instructor->created_at}}</td>
                                                @if($instructor->permission == 'approved')
                                                    <td><span class="label gradient-1 label-pill label-success">{{$instructor->permission}}</span></td>
                                                @else
                                                    <td>
                                                        <a href="{{route('instructor-approve', $instructor->id)}}" class="btn btn-info btn-rounded" style="color: white" >Approve</a>
                                                    </td>
                                                @endif
                                                @if($instructor->permission = 'approved')
                                                    <td>
                                                        <a href="{{route('instructor-suspend', $instructor->id)}}" class="btn btn-danger btn-rounded" style="color: white;" >Unapprove</a>
                                                    </td>
                                                @else
                                                    <td>
                                                        <a href="{{route('instructor-suspend', $instructor->id)}}" class="btn btn-danger btn-rounded" style="color: white;  pointer-events: none; cursor: not-allowed;" >Unapprove</a>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <h3 style="text-align: center; color: red">There is no Instructor request to show !!!</h3>
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
