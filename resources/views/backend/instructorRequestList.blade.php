

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
                        <h4>Instructor requested list</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr style="text-align: center">
                                    <th>No</th>
                                    <th>Instructor Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Requested Date</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center">
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



                               {{-- <tr>
                                  <th>2</th>
                                  <td>Instructor Name2</td>
                                  <td>email@.com</td>
                                  <td>17-01-2022</td>
                                    <td><div class="rounded-button">
                                            <button type="button" class="btn mb-1 btn-rounded btn-info">Approve</button>
                                        </div></td>

                                </tr>
                                <tr>
                                  <th>3</th>
                                  <td>Instructor Name3</td>
                                  <td>email@.com</td>
                                  <td>17-01-2022</td>
                                    <td><div class="rounded-button">
                                            <button type="button" class="btn mb-1 btn-rounded btn-info">Approve</button>
                                        </div></td>

                                </tr>
                                <tr>
                                  <th>4</th>
                                  <td>Instructor Name4</td>
                                  <td>email@.com</td>
                                  <td>17-01-2022</td>
                                    <td><div class="rounded-button">
                                            <button type="button" class="btn mb-1 btn-rounded btn-info">Approve</button>
                                        </div></td>

                                </tr>--}}
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
