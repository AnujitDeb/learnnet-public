<?php

namespace App\Http\Controllers;

use App\Models\AdminBalance;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseEnrollRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var = Subscription::all();
        $subscribers = [];

        foreach ($var as $subscriber){
            if(($subscriber->status == 'pending') || ($subscriber->status == 'approved')){
                $subscribers[] = $subscriber;
            }
        }

        return view('backend.courseEnrollRequest', ['subscribers' => $subscribers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approve($subscriber_id){

        //For user table update
        $subscriber = Subscription::find($subscriber_id);
//        dd($subscriber);
        $subscriber->status = 'approved';
        $subscriber->save();

        //For Admin Balance Update
        $sum = Subscription::where('status', 'approved')->sum('payable_amount');
        Session::put('adminBalance', $sum);
        $profit = ($sum * 25) / 100;

        //For student balace sheet of admin


        //For Instructor Balance Update


        Session::flash('statusCode', 'success');
        return redirect()->back()->with('massage', 'The Payment Request is Approved');
    }

    public function unapprove($subscriber_id){
        $subscriber = Subscription::find($subscriber_id);
//        dd($subscriber);
        $subscriber->status = 'rejected';
        $subscriber->save();

        //For Admin Balance update
        $sum = Subscription::where('status', 'approved')->sum('payable_amount');
        Session::put('adminBalance', $sum);

        Session::flash('statusCode', 'warning');
        return redirect()->back()->with('massage', 'The Payment Request is Unapproved!!!');
    }
}
