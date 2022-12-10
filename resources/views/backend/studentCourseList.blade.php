


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
                        <h4>Student Course List</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr style="text-align: center">
                                <th>No</th>
                                <th>Student Name</th>
                                <th>Course Name</th>
                                <th>Instructor Name</th>
                                <th>Requested Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr style="text-align: center">
                                <th>1</th>
                                <td>Student Name1</td>
                                <td>Course Name1</td>
                                <td>Anujit</td>
                                <td>17-01-2022</td>
                                <td><span class="label gradient-1 label-pill label-primary">Enrolled</span></td>
                                <td>
                                    <a href="" class="btn btn-rounded btn-info">
                                        View
                                    </a>
                                </td>

                            </tr>
                            <tr style="text-align: center">
                                <th>2</th>
                                <td>Student Name2</td>
                                <td>Course Name2</td>
                                <td>Praggo</td>
                                <td>17-01-2022</td>
                                <td><span class="label gradient-3 label-pill label-secondary">Pending</span></td>
                                <td>
                                    <a href="" class="btn btn-rounded btn-info">
                                        View
                                    </a>
                                </td>

                            </tr>
                            <tr style="text-align: center">
                                <th>3</th>
                                <td>Student Name2</td>
                                <td>Course Name2</td>
                                <td>Niaz</td>
                                <td>17-01-2022</td>
                                <td><span class="label gradient-2 label-pill label-primary">Canceled</span></td>
                                <td>
                                    <a href="" class="btn btn-rounded btn-info">
                                        View
                                    </a>
                                </td>

                            </tr>
                            <tr style="text-align: center">
                                <th>4</th>
                                <td>Student Name3</td>
                                <td>Course Name3</td>
                                <td>Soccho</td>
                                <td>17-01-2022</td>
                                <td><span class="label gradient-3 label-pill label-secondary">Pending</span></td>
                                <td>
                                    <a href="" class="btn btn-rounded btn-info">
                                        View
                                    </a>
                                </td>

                            </tr>
                            <tr style="text-align: center">
                                <th>5</th>
                                <td>Student Name4</td>
                                <td>Course Name4</td>
                                <td>Sadia</td>
                                <td>17-01-2022</td>
                                <td><span class="label gradient-1 label-pill label-primary">Enrolled</span></td>
                                <td>
                                    <a href="" class="btn btn-rounded btn-info">
                                        View
                                    </a>
                                </td>

                            </tr>
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
