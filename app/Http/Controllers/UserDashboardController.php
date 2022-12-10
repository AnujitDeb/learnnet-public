<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function userView(){
        $courses = Course::all()->take(15);
//        dd($courses);

        return view('frontend/index', ['courses' => $courses]);
    }
    public function profileView()
    {
        return view('backend.userProfile');
    }
}
