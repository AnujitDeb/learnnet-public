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
          <div class="col-lg-8 mx-auto" style="padding-top: 15px">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-header" style="text-align: center;">Create Admin</h4>
                    <div class="basic-form">
                        <form action="{{route('create-admin.store')}}" method="post">
                            @csrf

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">First Name :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name"/>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-6">{{$message}}</strong>
                                          </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Last Name :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name"/>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-6">{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Email :</div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-6">{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Phone :</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="+880 1XXX XXX XXX"/>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-6">{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Institution :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" placeholder="Institution"/>
                                    @error('institution')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-6">{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Country :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" placeholder="Country"/>
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-6">{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Skills :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('skills') is-invalid @enderror" name="skills" placeholder="Skills"/>
                                    @error('skills')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-6">{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Password :</div>
                                <div class="col-md-9">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"/>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-6">{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Confirm Password :</div>
                                <div class="col-md-9">
                                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="password" placeholder="Confirm Password"/>
                                    @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-6">{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Image :</div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image[]" multiple="multiple"/>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-6">{{$message}}</strong>
                                          </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="hidden" value="admin" name="type">
                            </div>

                            <div class="rounded-button">
                                <button type="submit" name="admin" value="admin" class="btn mb-1 btn-rounded btn-secondary">Create</button>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="index.html">Learnnet</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
         Scripts
***********************************-->
    <script src="asset/plugins/common/common.min.js"></script>
    <script src="asset/js/custom.min.js"></script>
    <script src="asset/js/settings.js"></script>
    <script src="asset/js/gleek.js"></script>
    <script src="asset/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="asset//plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="asset//plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="asset//plugins/d3v3/index.js"></script>
    <script src="asset//plugins/topojson/topojson.min.js"></script>
    <script src="asset//plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="asset/plugins/raphael/raphael.min.js"></script>
    <script src="asset/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="asset/plugins/moment/moment.min.js"></script>
    <script src="asset/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="asset/plugins/chartist/js/chartist.min.js"></script>
    <script src="asset/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="asset//js/dashboard/dashboard-1.js"></script>

</body>

</html>
