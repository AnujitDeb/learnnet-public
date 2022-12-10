<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPaymentRequest;
use App\Models\Course;
use App\Models\Subscription;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserPaymentRequestController extends Controller
{
    public function view($courseId, $videoId){

        $course = Course::find($courseId);

        return view('backend.userPayment', ['course' => $course, 'videoId' => $videoId]);
    }

    public function paymentRequest(UserPaymentRequest $request){

        $mainVideo = Video::find($request->videoId);
//        dd($mainVideo);
        $course_id = $mainVideo->course_id;

        $course = Course::find($course_id);
//        dd($course);

        Subscription::create([
            'transaction_method' => $request->transMethod,
            'transaction_id' => $request->transactionId,
            'course_id' => $course->id,
            'student_id' => session('user.id'),
            'payable_amount' => $course->discounted_price,
            'status' => 'pending'
        ]);

        Session::flash('statusCode', 'info');
        return redirect()->route('video-show', $request->videoId)->with('massage', 'Your payment request will be Verify soon');
    }
}
