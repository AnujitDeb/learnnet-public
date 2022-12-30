<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentWithdrwalRequest;
use App\Models\InstructorCreditNote;
use App\Models\Subscription;
use App\Models\User;
use App\Models\WithdrawalRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class InstructorTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $id = session('user.id');
        $transactions = WithdrawalRequest::where('instructor_id', $id)->get();
        return view('backend.instructorTransactionStatement', ['transactions' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function withdrawRequestView()
    {
        return view('backend.instructorWithdrawalRequest');
    }

    public function withdrawRequest(PaymentWithdrwalRequest $request)
    {
        $instructor_id = session('user.id');
        $instructor = User::find($instructor_id);

        $password = $instructor->password;
        $email = $instructor->email;

        $instructor = Subscription::where('instructor_id', session('user.id'));
        $sumOfSubscription = $instructor->where('status', 'approved')->sum('payable_amount');
        $sumOfSubscription = $sumOfSubscription - (($sumOfSubscription * 25) / 100);

        $instructorWithdraw = InstructorCreditNote::where('instructor_id', session('user.id'));
        $sumOfWithdraw = $instructorWithdraw->where('status', 'disbursed')->sum('amount');

        $Instructorbalance = $sumOfSubscription - $sumOfWithdraw;

//        dd($phone);

        $status = 'requested';

        if (($request->amount == 0) || ($request->amount > $Instructorbalance)) {
            Session::flash('statusCode', 'warning');
            return redirect()->back()->with('massage', 'Your given Amount is not valid');
        }

        if (Hash::check($request->password, $password) && ($request->email == $email)) {
            $withdrwalRequest = WithdrawalRequest::where('instructor_id', $request->user_id)->get();
            $check = $withdrwalRequest->where('status', 'requested')->first();
            if ($check) {
                Session::flash('statusCode', 'warning');
                return redirect()->back()->with('massage', 'Already one Withdrawal request is Pending');
            } else {
                WithdrawalRequest::create([
                    'instructor_id' => $request->user_id,
                    'amount' => $request->amount,
                    'payment_method' => $request->transactionMethod,
                    'status' => $status,
                    'account_number' => $request->accountNo,
                    'instructor_name' => $request->instructor_name,
                    'instructor_phone' => $request->instructor_phone
                ]);
                Session::flash('statusCode', 'success');
                return redirect('instructor-transaction')->with('massage', 'Withdrawal request is Pending');
            }
        } else {
            Session::flash('statusCode', 'warning');
            return redirect()->back()->with('massage', 'Your given email or password did not match');
        }
    }

}
