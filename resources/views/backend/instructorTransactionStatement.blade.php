


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
                        <table class="table table-striped">
                            <thead style="text-align: center">
                                <tr>
                                    <th>No</th>
                                    <th>Course Name</th>
                                    <th>Publish Date</th>
                                    <th>Request Date</th>
                                    <th>Amount taka</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody style="text-align: center">
                                <tr>
                                    <th>1</th>
                                    <td>Course Name1</td>
                                    <td>17-01-2022</td>
                                    <td>20-04-2022</td>
                                    <td>1800</td>
                                    <td><span class="label gradient-2 label-pill label-primary">Not paid</span></td>

                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Course Name2</td>
                                    <td>05-03-2022</td>
                                    <td>21-07-2022</td>
                                    <td>4000</td>
                                    <td><span class="label gradient-1 label-pill label-success">Approved</span></td>

                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Course Name3</td>
                                    <td>01-05-2022</td>
                                    <td>20-8-2022</td>
                                    <td>3500</td>
                                    <td><span class="label gradient-3 label-pill label-primary">Void</span></td>

                                </tr>
                                <tr>
                                  <th>4</th>
                                  <td>Course Name4</td>
                                  <td>20-08-2022</td>
                                  <td>18-12-2022</td>
                                    <td>2000</td>
                                    <td><span class="label gradient-7 label-pill label-primary">Hold</span></td>

                                </div>

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
