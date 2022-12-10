<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseVideoPlayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function view($id)
    {
        $course = Course::find($id);
        $materials = null;
        $materials = CourseMaterial::where('course_id', $id)->get();

        $videos = Video::where('course_id', $id)->get();
        $mainVideo = Video::where('course_id', $id)->get()->first();
        if(!$mainVideo){
            Session::flash('statusCode', 'warning');
            return redirect()->back()->with('massage', 'There is no Video published yet!!!');
        }
//        dd($first);

        return view('videoPages.courseVideoPlay', ['course' => $course, 'videos' => $videos, 'materials' => $materials, 'mainVideo' => $mainVideo]);
    }

    public function videoShow($video_id)
    {
        $mainVideo = Video::find($video_id);
//        dd($mainVideo);
        $course_id = $mainVideo->course_id;

        $course = Course::find($course_id);
        $materials = CourseMaterial::where('course_id', $course_id)->get();
//        dd($materials);

        foreach ($materials as $material) {
            if(!$material){
                $materials = null;
                break;
            }
        }

        $videos = Video::where('course_id', $course_id)->get();

        if(!$mainVideo){
            Session::flash('statusCode', 'warning');
            return redirect()->back()->with('massage', 'There is no Video published yet!!!');
        }
//        dd($first);

        return view('videoPages.courseVideoPlay', ['course' => $course, 'videos' => $videos, 'materials' => $materials, 'mainVideo' => $mainVideo]);

    }
}
