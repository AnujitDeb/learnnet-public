<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CourseEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.instructorEditCourse');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($course_id)
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
        $course = \App\Models\Course::find($id);

        $videos = [];
        $var = Video::all();
        foreach ($var as $video){
            if($video->course_id == $id){
                $videos[] = $video;
            }
        }

        $materials = [];
        $let = CourseMaterial::all();
        foreach ($let as $material){
            if($material->course_id == $id){
                $materials[] = $material;
            }
        }

        return view('backend.instructorEditCourse', ['course' => $course, 'videos' => $videos, 'materials' => $materials]);
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
    public function destroy($id, $course_id)
    {
        $material = CourseMaterial::find($id);
        $file = $material->fileName;
        $file_path = public_path('materials/');
        unlink($file_path.$file);

        CourseMaterial::find($id)->delete();
        $course = Course::find($course_id);

        $material_count = CourseMaterial::where('course_id', $course->id)->count();
        $course->material_count = $material_count;
        $course->save();

        Session::flash('statusCode', 'warning');
        return redirect()->back()->with('massage', 'Successfully Deleted');
    }
}
