<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\CreateMaterialRequest;
use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('backend/courseMaterialUpload', ['id' => $id]);
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
    public function store(CreateMaterialRequest $request)
    {
        $fileRandName = md5(rand(1000, 10000));
        $extension = strtolower($request->file->getClientOriginalExtension());
        $fileName = $fileRandName.'.'.$extension;
        $request->file->move(public_path().'/materials/', $fileName);

//        $files = json_encode($fileNames);

        CourseMaterial::create([
            'title' => $request->title,
            'course_id' => $request->courseId,
            'fileName' => $fileName
        ]);

        $course = Course::find($request->courseId);
        $material_count = CourseMaterial::where('course_id', $request->courseId)->count();

        $course->material_count = $material_count;
        $course->save();


        Session::flash('statusCode', 'success');
        return redirect()->route('course-view', $request->courseId)->with('massage', 'Successfully Added');
//        return url('backend.instructorEditCourse', ['course' => $course, 'videos' => $videos, 'materials' => $materials]);

    }


    public function viewCourse($course_id)
    {

        $course = \App\Models\Course::find($course_id);

        $videos = [];
        $var = Video::all();
        foreach ($var as $video){
            if($video->course_id == $course_id){
                $videos[] = $video;
            }
        }

        $materials = [];
        $let = CourseMaterial::all();
        foreach ($let as $material){
            if($material->course_id == $course_id){
                $materials[] = $material;
            }
        }

        return view('backend.instructorEditCourse', ['course' => $course, 'videos' => $videos, 'materials' => $materials]);

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
}
