<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;

class UserDashboardController extends Controller
{
    public function userView(){
        $courses = Course::where('status', 'active')->get()->take(15);
//        dd($courses);

        return view('frontend/index', ['courses' => $courses]);
    }

    public function profileView()
    {
        return view('backend.userProfile');
    }

    public function profileEdit(){
        return view('backend.userProfileEdit');
    }

    public function updateProfile(UpdateUserRequest $request){

        $user = User::find($request->user_id);

        if($request->image){
            if($user->image){
                $file = $user->image;
                $file_path = public_path('profilePic/');
                unlink($file_path.$file);
            }

            $img = $request->image;
            $imgRandName = md5(rand(1000, 10000));
            $extension = strtolower($img->getClientOriginalExtension());
            $imgName = $imgRandName . '.' . $extension;
            $img->move(public_path() . '/profilePic/', $imgName);
            $user->update([
                'image' => $imgName
            ]);
        }

        if($request->password){
            $request->merge(['password' => Hash::make($request->input('password'))]);
            $user->update([
                'password' => $request->password
            ]);
        }


        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'institution' => $request->institution,
            'country' => $request->country,
            'email' => $request->email,
            'phone' => $request->phone,
            'skill' => $request->skill
        ]);
        session()->put('user', $user);

        \Illuminate\Support\Facades\Session::flash('statusCode', 'success');
        return redirect()->back()->with('massage', 'successfully Updated');

    }

    public function courses(){
        $allCourse = Course::where('status', 'active')->get();

//        return redirect('courses', ['courses' => $allCourse]);
        return view('frontend/courses', ['courses' => $allCourse]);
    }

    public function search(Request $request){
        $searchedCourse = $request->search ?? "";

        if($searchedCourse == null){
            \Illuminate\Support\Facades\Session::flash('statusCode', 'warning');
            return redirect()->back()->with('massage', "Your Search is not valid");
        }
        else{
            $courses = Course::where('title', 'LIKE', '%' .$searchedCourse. '%')
                ->orwhere('description', 'LIKE', '%' .$searchedCourse. '%')
                ->where('status', 'active')->get();
        }

        foreach ($courses as $course){
            if($course->title == null){
                dd('it is empty');
            }
        }

        return view('frontend/courses', ['courses' => $courses]);
    }
}
