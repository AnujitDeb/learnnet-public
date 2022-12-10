


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
                        <h2 class="text-white">Payment</h2>
                    </div>


                    <div class="card-body">
                        <div style="text-align: center;">
                            <table class="table table-striped table-bordered zero-configuration table-dark">
                                <thead style="text-align: center">
                                    <th colspan="4" style="color: white; font-weight: bold; font-size: 2rem">Invoice</th>
                                </thead>
                                <tbody>
                                <tr class="table-success" style="text-align: center">
                                    <td>Course Title</td>
                                    <td>Video Count</td>
                                    <td>Price</td>
                                    {{--<td>Online Trans. Charge</td>--}}{{--
                                    <td>Total Payable Amount</td>--}}
                                </tr>
                                <tr style="text-align: center; color: white ">
                                    <td>{{$course->title}}</td>
                                    <td>{{$course->video_count}}</td>
                                    <td>{{$course->discounted_price}}</td>

                                    @php
                                        $payableAmount =  round(($course->discounted_price * config('Charges.transCharge')) / 100);
                                        $finalAmount = $payableAmount + $course->discounted_price;
                                    @endphp

                                </tr>
                                <tr style="color: white">
                                    <td colspan="2" style=" text-align: right;">Online Transaction Charge ({{config('Charges.transCharge').'%'}}) :</td>
                                    <td>{{$payableAmount}}</td>
                                </tr>
                                <tr style="color: white">
                                    <td colspan="2" style=" text-align: right;">Total Payable Amount :</td>
                                    <td>{{$finalAmount}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div style="text-align: center; color: red">
                            <p style="color: black"></p>
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead style="text-align: center">
                                    <th colspan="3">Methods</th>
                                </thead>
                                <tbody>
                                <tr class="table-success" style="text-align: center">
                                    <td>bKash</td>
                                    <td>Nagad</td>
                                    <td>Rocket</td>
                                </tr>
                                <tr style="text-align: center; color: blue">
                                    <td>{{config('BankAccount.bKash')}}</td>
                                    <td>{{config('BankAccount.nagad')}}</td>
                                    <td>{{config('BankAccount.rocket')}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <form action="{{route('payment-request')}}" method="post">
                            @csrf

                            <div class="row md-3 mt-3 mb-3">
                                <div class="col-md-3 ">Method</div>
                                <div class="col-md-9">

                                    <select id="inputState" class="form-control @error('transMethod') is-invalid @enderror" name="transMethod">
                                        <option value="" selected="selected">Choose a method...</option>
                                        <option value="bKash">bKash</option>
                                        <option value="nagad">Nagad</option>
                                        <option value="rocket">Rocket</option>
                                    </select>

                                    @error('transMethod')
                                    <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row md-3 mb-3">
                                <div class="col-md-3">Transaction id :</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('transactionId') is-invalid @enderror" name="transactionId" placeholder="Ex: BD06232025610402"/>
                                    @error('transactionId')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="hidden" value="{{$videoId}}" name="videoId">
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
