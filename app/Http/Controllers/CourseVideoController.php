<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideoRequest;
use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class CourseVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($course_id)
    {
        return view('backend/course-video-upload', ['course_id' => $course_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(CreateVideoRequest $request)
    {
//        dd($request->all());
//        dd($request->file('thumbnail')->getClientOriginalName());
        $img = $request->thumbnail;
        $imgRandName = md5(rand(1000, 10000));
        $extension = strtolower($img->getClientOriginalExtension());
        $imgName = $imgRandName . '.' . $extension;
        $img->move(public_path() . '/thumbnails/', $imgName);

        if (str_contains($request->videoLink, "youtube.com")) {
            $url = parse_url($request->videoLink, PHP_URL_QUERY);
            parse_str($url, $queries);
            $videoId = $queries['v'];
            $videoLink = sprintf(config("youtube.video_url"), $videoId);
        } elseif (str_contains($request->videoLink, "youtu.be")) {
            $split = explode('/', $request->videoLink);
            $videoLink = sprintf(config("youtube.video_url"),  end($split));
        }
        $filnalLink = str_ireplace('watch?v=', 'embed/', $videoLink);
//        dd($hello);

        Video::create([
            'thumbnail' => $imgName,
            'title' => $request->title,
            'video_link' => $filnalLink,
            'course_id' => $request->course_id,
            'duration' => $request->duration,
            'is_free' => $request->status
        ]);

        $course = Course::find($request->course_id);
        $video_count = Video::where('course_id', $request->course_id)->count();

        $videos = [];
        $var = Video::all();
        foreach ($var as $video) {
            if ($video->course_id == $request->course_id) {
                $videos[] = $video;
            }
        }
        $materials = [];
        $let = CourseMaterial::all();
        foreach ($let as $material) {
            if ($material->course_id == $request->course_id) {
                $materials[] = $material;
            }
        }

        $course->video_count = $video_count;
        $course->save();

        Session::flash('statusCode', 'success');
        return redirect()->route('course-edit', $request->course_id)->with('massage', 'Successfully Added');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        if($video->video_link != $request->videoLink){
            if (str_contains($request->videoLink, "youtube.com")) {
                $url = parse_url($request->videoLink, PHP_URL_QUERY);
                parse_str($url, $queries);
                $videoId = $queries['v'];
                $videoLink = sprintf(config("youtube.video_url"), $videoId);
            } elseif (str_contains($request->videoLink, "youtu.be")) {
                $split = explode('/', $request->videoLink);
                $videoLink = sprintf(config("youtube.video_url"),  end($split));
            }
            $filnalLink = str_ireplace('watch?v=', 'embed/', $videoLink);

            $video->video_link = $filnalLink;
        }

        if($request->thumbnail){
            $file = $video->thumbnail;
            $file_path = public_path('thumbnails/');
            unlink($file_path . $file);

            $img = $request->thumbnail;
            $imgRandName = md5(rand(1000, 10000));
            $extension = strtolower($img->getClientOriginalExtension());
            $imgName = $imgRandName . '.' . $extension;
            $img->move(public_path() . '/thumbnails/', $imgName);

            $video->thumbnail = $imgName;
        }

        $video->title = $request->title;
        $video->duration = $request->duration;
        $video->is_free = $request->status;

        $video->save();

        Session::flash('statusCode', 'success');
        return redirect()->route('course-edit', $request->course_id)->with('massage', 'Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id, $course_id)
    {
        $video = Video::find($id);
        $file = $video->thumbnail;
        $file_path = public_path('thumbnails/');
        unlink($file_path . $file);

        Video::find($id)->delete();

        $course = Course::find($course_id);
        $video_count = Video::where('course_id', $course_id)->count();
        $course->video_count = $video_count;
        $course->save();

        Session::flash('statusCode', 'warning');
        return redirect()->back()->with('massage', 'Successfully Deleted');
    }


    public function matView($fileName)
    {
        return view('backend/materialView', ['fileName' => $fileName]);
    }

    public function videoEdit($videoId){
        $video = Video::find($videoId);

        return view('backend.course-video-edit', ['video' => $video]);
    }


}
