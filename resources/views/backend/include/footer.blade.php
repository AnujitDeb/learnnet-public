
</div>



<footer class="bg-dark pt-1 mt-0 py-0">
    <div class="container-fluid text-white  px-sm-3 px-lg-5" style="margin-top: 50px;">
        <div class="row ">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-4">
                        <div class="m-5">
                            <h3 class="text-uppercase mb-4 " style="letter-spacing: 5px; color: #9E62C7;">Learnnet  </h3>
                            <p class="text-white text-justify">An electronic learning platform is an integrated set of interactive online services that provide trainers, learners, and others involved in education with information, tools, and resources to support and enhance education delivery and management.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="m-5">
                            <h3 class="text-uppercase mb-4" style="letter-spacing: 5px; color: #9E62C7;">Our Courses</h3>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> PHP with Laravel Framework</a>
                                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> App Design & Development</a>
                                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Digital Marketing</a>
                                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Research</a>
                                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i> SEO</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="m-5">
                            <h3 class="text-uppercase mb-4" style="letter-spacing: 5px; color: #9E62C7;">Get In Touch</h3>
                            <p class="text-white"><i class="fa fa-map-marker-alt mr-2 text-white"></i>Dhanmondi-27, Dhaka-1207, Bangladesh </p>
                            <p class="text-white"><i class="fa fa-phone-alt mr-2 text-white"></i> +880 1966 509310</p>
                            <p class="text-white"><i class="fa fa-envelope mr-2 text-white"></i> niazahmed.net@gmail.com</p>
                            <div class="d-flex justify-content-start">
                                <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in text-white"></i></a>
                                <a class="btn btn-outline-light btn-square" href="#"><i
                                        class="fab fa-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">

            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="mx-4 text-white">&copy; <a href="#"> LEARNNET</a> &ensp; All Rights Reserved. Designed by LEARNNET</a></p>
            </div>

            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex mx-4">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</footer>
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

{{--Data Table--}}

<script src="asset/plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="asset/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="asset/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>


<script src="asset//js/dashboard/dashboard-1.js"></script>
<script src="{{asset('asset/js/sweetalert.js')}}"></script>
<script>
    @if(session('massage'))
        @if(session('check') == 'login')
            swal({
                title: "{{session('user.first_name')}}",
                text: "{{session('massage')}}",
                icon: "{{session('statusCode')}}",
                button: "ok",
            });

        @elseif(session('check') == 'logout')
            swal({
                {{--title: "{{session('user.first_name')}}",--}}
                text: "{{session('massage')}}",
                icon: "{{session('statusCode')}}",
                button: "ok",
            });
        @else

            @if(session('statusCode') == 'warning')
                swal({
                    title: "Warning!",
                    text: "{{session('massage')}}",
                    icon: "{{session('statusCode')}}",
                    button: "ok",
                });
            @else
                swal({
                    title: "Good job!",
                    text: "{{session('massage')}}",
                    icon: "{{session('statusCode')}}",
                    button: "ok",
                });
            @endif
        @endif
    @endif
</script>

</body>

</html>
