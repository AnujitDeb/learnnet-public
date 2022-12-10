


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



    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Instructor List</h4>
                                    <form action="{{route('instructors.index')}}" method="get">
                                        @csrf

                                        @if($users)
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>Registration Date</th>
                                                    <th>Image</th>
                                                    <th>edit</th>
                                                    <th>delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php
                                                    $id = 1;
                                                @endphp
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td class="text-center">{{$id++}}</td>
                                                        <td class="text-center">{{$user['first_name']}}</td>
                                                        <td class="text-center">{{$user['email']}}</td>
                                                        <td class="text-center">{{$user['created_at']}}</td>
                                                        <td class="text-center"><img src="asset/images/praggo.jpg" alt="" height="50" width="80"/></td>
                                                        <td>
                                                            <div class="rounded-button" style="text-align: center">
                                                                <form action="{{url("")}}" method="post">
                                                                    @csrf
                                                                    @method('UPDATE')
                                                                    <button type="submit" class="btn mb-1 btn-rounded btn-info">Edit</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="rounded-button" style="text-align: center">
                                                                <form action="{{url('instructors/'.$user->id)}}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn mb-1 btn-rounded btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            </div>
                                        @else
                                            <h3 style="text-align: center; color: red">There is no Instructor to show !!!</h3>
                                        @endif

                                    </form>
                            </div>
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


