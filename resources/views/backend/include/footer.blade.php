<div class="footer">
    <div class="copyright">
        <p>Copyright &copy; Designed & Developed by <a href="index.html">Learnnet</a> 2022</p>
    </div>
</div>

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
