


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

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-4">
                                <img class="mr-3" src="asset/images/niaz.jpg" width="80" height="80" alt="">
                                <div class="media-body">
                                    <h3 class="mb-0">Username 001</h3>
                                    <p class="text-muted mb-0">Bangladesh</p>
                                </div>
                            </div>

                            <h4>About Me</h4>
                            <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
                            <ul class="card-profile__info">
                                <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>016********</span></li>
                                <li><strong class="text-dark mr-4">Email</strong> <span>user001@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Information</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped verticle-middle">
                            <!-- <thead>
                                <tr>
                                    <th scope="col">Task</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead> -->
                            <tbody>
                            <tr>
                                <td>Username</td>
                                <td>Username 001</td>

                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>27/1/A, Dhanmondi, Dhaka</td>
                            </tr>
                            <tr>
                                <td>Institution</td>
                                <td>State University Of Bangladesh</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>Bangladesh</td>
                            </tr>
                            <tr>
                                <td>Phone no</td>
                                <td>016*******</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>user001@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6 col-xl-12">
                  <div class="card">
                      <div class="card-body">
                          <ul class="card-profile__info">
                              <li class="mb-1"><strong class="text-dark mr-4">Username</strong> <span>*********</span></li>
                              <li><strong class="text-dark mr-4">Address</strong> <span>********* ****** **</span></li>
                              <li><strong class="text-dark mr-4">Institution</strong> <span>********* ****** **</span></li>
                              <li><strong class="text-dark mr-4">Courses</strong> <span>********* ****** **</span></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div> -->


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
