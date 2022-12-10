

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

        <div style="text-align: center; padding-top: 10px">
            <iframe src="/materials/{{$fileName}}" style="height: 700px; width: 1000px"></iframe>
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
