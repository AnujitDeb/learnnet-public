


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

            <div class="container-fluid mt-3">
                <div class="row">


                    <!-- table Start -->
                    <div class="col-lg-8 mx-auto">
                        <div class="card shadow">
                            <div class="card-header text-center" style="background-color: #7571F9;">
                                <h2 class=" text-white">Upload Course Video</h2>
                            </div>

                            <div class="card-body">

                                <form action="{{route('course-video.update', $video->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row md-3 mt-3 mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9" style="text-align: right">
                                            <a href="{{url('/course-edit'.$video->course_id)}}" class="btn btn-outline-secondary float-lg-right" ><i class="fa-solid fa-chevron-left"></i></a>
                                        </div>
                                    </div>

                                    <div class="row md-3 mt-3 mb-3">
                                        <div class="col-md-3">Video Link:</div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('videoLink') is-invalid @enderror" name="videoLink" value="{{$video->video_link}}"/>

                                            @error('videoLink')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row md-3 mt-3 mb-3">
                                        <div class="col-md-3 ">Video title:</div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$video->title}}"/>

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row md-3 mt-3 mb-3">
                                        <div class="col-md-3 ">Duration:</div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{$video->duration}}"/>

                                            @error('duration')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="row md-3 mb-3">
                                        <label class="col-md-3">Status :</label>
                                        <div class="col-md-9 @error('status') is-invalid @enderror">


                                            <select name="status" id="status">
                                                <option value="public">Public</option>
                                                <option value="private">Private</option>
                                            </select>

                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row md-3 mb-3">
                                        <div class="col-md-3">Thumbnail:</div>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail"/>

                                            @error('thumbnail')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" value="{{$video->course_id}}" name="course_id">
                                    </div>

                                    <div class="col-md-12" style="text-align: center">
                                        <input type="submit" class="btn btn-secondary @error('submit') is-invalid @enderror" name="submit" value="Update"/>
                                        {{--<a href="{{url('/course-video-upload'.$course_id)}}" class="btn btn-rounded btn-info">
                                            Upload
                                        </a>--}}

                                        @error('submit')
                                        <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- table end -->


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


