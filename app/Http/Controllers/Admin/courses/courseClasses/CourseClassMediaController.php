<?php

namespace App\Http\Controllers\Admin\courses\courseClasses;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\CourseClass;
use App\Model\CourseClassLecture;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseClassMediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:categories_show', ['only' => 'index', 'show']);
        $this->middleware('permission:categories_add', ['only' => 'store', 'create']);
        $this->middleware('permission:categories_edit', ['only' => 'edit', 'update']);
        $this->middleware('permission:categories_delete', ['only' => 'destroy']);
    }

    public function index(Request $request,$courseID,$courseClassID)
    {
        $course =  Course::findOrFail($courseID);
        $item = CourseClass::where('course_id',$courseID)->where('id',$courseClassID)->first();
        $videos =  $item->getMedia('videos');
        return view('admin.courses.coursesClasses.media.index',compact('item','videos','course'));
    }

    public function store(Request $request,$courseID,$courseClassID)
    {
        Course::findOrFail($courseID);
       $courseClass = CourseClass::findOrFail($courseClassID);
        $data = $request->validate([
//            'image' => 'required|image',
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000',
        ]);


//        $courseClass->addMediaFromRequest('video')->toMediaCollection('videos')->withCustomProperties(['uuid' => $uuid]);
        $video =  $courseClass->addMediaFromRequest('video')->toMediaCollection('videos');
//        $video->addMediaFromRequest('image')->toMediaCollection('images');
        return redirect()->back()->with('success', 'تم اضافه الشريحه بنجاح');
    }
//    public function create($courseID,$courseClassID)
//    {
//        Course::findOrFail($courseID);
//        CourseClass::findOrFail($courseClassID);
//        return view('admin.courses.coursesClasses.lectures.create');
//    }
//
//    public function edit($courseID,$courseClassID)
//    {
//        Course::findOrFail($courseID);
//        CourseClass::findOrFail($courseClassID);
//        $item = CourseClassLecture::findorfail($courseClassID);
//        return view('admin.courses.coursesClasses.lectures.edit', compact('item'));
//    }
//
//    public function update(Request $request, $courseID,$courseClassID,$LectureID)
//    {
//        Course::findOrFail($courseID);
//        CourseClass::findOrFail($courseClassID);
//        $item = CourseClassLecture::findorfail($LectureID);
//        $data = $request->validate([
//            'image' => 'required|image',
//            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000',
//        ]);
//        $item->update($data);
//        return redirect()->back()->with('success','تم تعديل محتوي الفصل بنجاح');
//    }

    public function destroy(Request $request,$courseID,$courseClassID)
    {

        $videoID = $request->vedio_id;
        Course::findOrFail($courseID);
       $courseClass = CourseClass::findOrFail($courseClassID);
        $videos =  $courseClass->getMedia('videos')->where('id',$videoID)->first();
        $videos->delete();
        return response()->json(true,200);
    }
}
