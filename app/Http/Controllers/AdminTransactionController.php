<?php

namespace App\Http\Controllers;

use App\Models\InstructorCreditNote;
use App\Models\Subscription;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    public function studentTransaction(){
        $transactions = Subscription::all();

        return view('backend.studentTransactionStatementForAdmin', ['transactions' => $transactions]);
    }

    public function instructorTransaction(){
        $transactions = InstructorCreditNote::all();

        return view('backend.instructorTransactionStatementForAdmin', ['transactions' => $transactions]);
    }
}
