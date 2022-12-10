<?php

namespace App\Http\Controllers;

use App\Enums\Vat;
use App\Http\Requests\CreateCourseRequest;
use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend/course-upload');
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
    public function store(CreateCourseRequest $request)
    {
        $img = $request->thumbnail;
        $imgRandName = md5(rand(1000, 10000));
        $extension = strtolower($img->getClientOriginalExtension());
        $imgName = $imgRandName . '.' . $extension;
        $img->move(public_path() . '/courseThumbnail/', $imgName);

        $id = session('user.id');
    /*Making Course*/
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'prerequisite' => $request->prerequisite,
            'instructor_id' => $id,
            'thumbnail' => $imgName,
            'status' => $request->status,
            'original_price' => $request->originalPrice,
            'discounted_price' => $request->discountedPrice,
        ]);


        Session::flash('statusCode', 'success');
        return redirect()->route('course-list.index')->with('massage', 'The Course is successfully created');
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
//        dd($id);
        $materials = CourseMaterial::all();
        $videos = Video::all();

        foreach ($materials as $material){
            if($material->course_id == $id){
                $file = $material->fileName;
                $file_path = public_path('materials/');
                unlink($file_path.$file);

                CourseMaterial::where('course_id', $id)->delete();
            }
//            $material = CourseMaterial::find($id);

        }
        foreach ($videos as $video) {
            if($video->course_id == $id){
                $file = $video->thumbnail;
                $file_path = public_path('thumbnails/');
                unlink($file_path.$file);

                Video::where('course_id', $id)->delete();
            }

        }

        $del = Course::find($id)->delete();

        Session::flash('statusCode', 'warning');
        return redirect()->route('course-list.index')->with('massage', 'Course is deleted successfully');
    }
}

