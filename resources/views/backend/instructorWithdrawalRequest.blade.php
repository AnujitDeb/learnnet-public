


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
          <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Withdrawal</h4>
                    <div class="basic-form">
                        <form action="{{route('payment-withdrawal-request')}}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group  col-md-6">
                                    <label>Amount</label>
                                    <input type="number" class="form-control @error('amount') is-invalid @enderror" placeholder="৳৳৳" name="amount">
                                    @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Method</label>
                                    <select id="inputState" class="form-control @error('transactionMethod') is-invalid @enderror" name="transactionMethod">
                                        @error('transactionMethod')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <option value="" selected="selected">Choose...</option>
                                        <option value="bkash">bKash</option>
                                        <option value="nagad">Nagad</option>
                                        <option value="dbbl">DBBL</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group  col-md-6">
                                    <label>Account Number</label>
                                    <input type="text" class="form-control @error('accountNo') is-invalid @enderror" placeholder="Type your account number." name="accountNo">
                                    @error('accountNo')
                                    <span class="invalid-feedback" role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="hidden" value="{{session('user.id')}}" name="user_id">
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="{{session('user.first_name')}}" name="instructor_name">
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="{{session('user.phone')}}" name="instructor_phone">
                            </div>

                            <div class="rounded-button @error('image') is-invalid @enderror">
                              <button type="submit" class="btn mb-1 btn-rounded btn-secondary">Submit</button>
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

@include('backend/include/footer')

<!--**********************************
        Footer end
    ***********************************-->


