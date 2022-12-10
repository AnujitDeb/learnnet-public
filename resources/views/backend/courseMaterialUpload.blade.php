


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
                            <h2 class="text-white">Upload Course Materials</h2>
                        </div>

                        <div class="card-body">

                            <form action="{{route('course-material.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row md-3 mt-3 mb-3">
                                    <div class="col-md-3 ">Material title:</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Type material title"/>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row md-3 mb-3">
                                    <div class="col-md-3">Upload Material :</div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file"/>
                                        @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" value="{{$id}}" name="courseId">
                                </div>

                                <div style="text-align: center">
                                    <input type="submit" class  ="btn btn-info @error('submit') is-invalid @enderror"  value="Submit" name="submit"/>
                                    @error('submit')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{--<div class="" style="text-align: center">
                                    <input type="submit" class="form-control btn btn-success text-white" name="submitMaterial"
                                           value="Submit" style="background-color: #7571F9; width: max-content;"/>
                                </div>--}}
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

@include('backend/include/footer')

<!--**********************************
        Footer end
    ***********************************-->
