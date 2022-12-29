<?php

namespace App\Http\Controllers;

use App\Models\InstructorCreditNote;
use App\Models\User;
use App\Models\WithdrawalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminBalanceSheetController extends Controller
{
    public function index(){

        $withdrawalRequests = WithdrawalRequest::all();


        return view("backend.adminBalancedSheet", ['withdrawalRequest' => $withdrawalRequests]);
    }

    public function disburse($id){
        $withdraw = WithdrawalRequest::find($id);

        $withdraw->status = 'disbursed';
        $withdraw->save();

        //Instructor credit note update
        InstructorCreditNote::create([
            'amount' => $withdraw->amount,
            'instructor_id' => $withdraw->instructor_id,
            'status' => $withdraw->status,
            'account_number' => $withdraw->account_number,
            'transaction_method' => $withdraw->payment_method
        ]);

        //Instructor balance Update
        /*$user = User::find($id)->first();
        $user->balance -= $withdrawRequest->amount;
        $user->save();
        Session::put('instructorBalance', $user->balance);*/

        //Admin Balance Update
        /*$adminBalance = session('adminBalance');
        $adminBalance -= $withdrawRequest->amount;
        Session::put('adminBalance', $adminBalance);*/

        Session::flash('statusCode', 'success');
        return redirect()->back()->with('massage', 'Successfully Disbursed');
    }

    public function reject($id){
        $withdraw = WithdrawalRequest::find($id);
        $withdraw->status = 'rejected';
        $withdraw->save();


        //Instructor credit note update
        InstructorCreditNote::create([
            'amount' => $withdraw->amount,
            'instructor_id' => $withdraw->instructor_id,
            'status' => $withdraw->status,
            'account_number' => $withdraw->account_number,
            'transaction_method' => $withdraw->payment_method
        ]);


        Session::flash('statusCode', 'warning');
        return redirect()->back()->with('massage', 'Withdraw Request Rejected');

    }
}
