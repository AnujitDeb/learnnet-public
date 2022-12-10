<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function instructorRequestView()
    {
        $instructors = User::where('type', 'instructor')->get();
        return view('backend.instructorRequestList', ['instructors' => $instructors]);
    }

    public function instructorApprove($id)
    {
        $instructor = User::find($id);
//        dd($instructor);

        $instructor->permission = 'approved';
        $instructor->save();

        Session::flash('statusCode', 'success');
        return redirect()->back()->with('massage', 'This instructor is approved');
    }

    public function instructorSuspend($id)
    {
        $instructor = User::find($id);
//        dd($instructor);

        $instructor->permission = 'suspended';
        $instructor->save();

        Session::flash('statusCode', 'warning');
        return redirect()->back()->with('massage', 'This instructor is suspended!!!');
    }
}
