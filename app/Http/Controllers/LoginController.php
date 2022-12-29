<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLoginRequest;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('user')){
            return redirect()->back();
        }
        else {
            return view('auth.login');
        }
    }


    public function check(CreateLoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email',$email)->first();
        $credentials = $request->only('email', 'password');

        if($user && Hash::check($password, $user->password)){


            if($user->type == 'admin'){
                session()->put('user', $user);
                Session::flash('statusCode', 'success');
                Session::flash('check', 'login');


                //For Admin Balance update
                $sum = Subscription::where('status', 'approved')->sum('payable_amount');
                Session::put('adminBalance', $sum);

                return redirect()->route('admin-dashboard.index')->with('massage', 'You are successfully logged In:)');
            }
            else{
                if(($user->type == 'instructor') && ($user->permission == 'approved')){
                    //For Instructor Balance update
                    /*$instructor = Subscription::where('instructor_id', $user->id);
                    $sum = $instructor->where('status', 'approved')->sum('payable_amount');
                    $profit = ($sum * 25) / 100;
                    $user->balance = $sum - $profit;
                    $user->save();*/

                    session()->put('user', $user);
                    Session::put('instructorBalance', $user->balance);
                    Session::flash('statusCode', 'success');
                    return redirect()->route('learnnet')->with('massage', 'You are successfully logged In:)');
                }
                elseif($user->type == 'student'){
                    session()->put('user', $user);
                    Session::flash('statusCode', 'success');
                    return redirect()->route('learnnet')->with('massage', 'You are successfully logged In:)');
                }
                else{
                    Session::flash('statusCode', 'warning');
                    return  back()->with('massage', 'You are not approved yet!!!');
                }
            }

        }
        else{
            if(!$user){
                return  back()->withErrors([
                    'email' => 'The provided credentials do not match our records.'
                ]);
            }
            else{
                return  back()->withErrors([
                    'password' => 'The provided credentials do not match our records.'
                ]);
            }
        }

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

    //for destoring Session
    public function logout(){
        if(session()->has('user')){
//            session()->forget('user');

            if((session('logoutCheck') == 'backend') && (session('user.type') == 'admin')){
                Session::flush();
                Session::flash('statusCode', 'warning');
                Session::flash('check', 'logout');
                return redirect('admin-dashboard')->with('massage', 'You are Logged Out');
            }
            else{
                Session::flush();
                Session::flash('statusCode', 'warning');
                Session::flash('check', 'logout');
                return redirect('learnnet')->with('massage', 'You are Logged Out');
            }
        }
    }
}
