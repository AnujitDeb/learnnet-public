


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
                        <h2 class="text-white">Create Course</h2>
                    </div>

                    <div class="card-body">

                        <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            {{--div class="row mt-0">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <a href="{{route('course-video.index')}}"
                                       class="btn btn-outline-secondary float-lg-right">Add Video</a>
                                </div>
                            </div>--}}


                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Course title :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                           placeholder="Type course title"/>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Course Description :</div>
                                <div class="col-md-9">
                                        <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                                                  placeholder="Type course description" rows="3"></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Prerequisite :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('prerequisite') is-invalid @enderror" name="prerequisite"
                                           placeholder="Type prerequisite courses"/>
                                    @error('prerequisite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            {{--<div class="row md-3 mb-3">
                                <div class="col-md-3">Email :</div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                           placeholder="Type your email"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong class="text-red-600">{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>--}}

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Original Price :</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control @error('originalPrice') is-invalid @enderror" name="originalPrice"
                                           placeholder="Type the price of the Course (৳)" style="width: 240px"/>
                                    @error('originalPrice')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Discounted Price :</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control @error('discountedPrice') is-invalid @enderror" name="discountedPrice"
                                           placeholder="Type the price of the Course (৳)" style="width: 240px"/>
                                    @error('discountedPrice')
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
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>

                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Upload Course Thumbnail :</div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail"/>
                                    @error('thumbnail')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="" style="text-align: center">
                                <input type="submit" class="form-control btn btn-success btn-rounded text-white" name="createCourse"
                                       value="Create Course" style="background-color: #7571F9; width: max-content;"/>
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

@include('backend/include/footer')

<!--**********************************
        Footer end
    ***********************************-->
