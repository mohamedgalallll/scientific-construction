<?php

namespace App\Http\Controllers\Admin\courses\courseClasses;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\CourseClass;
use App\Model\CourseClassLecture;
use DataTables;
use Illuminate\Http\Request;

class CourseClassesLecturesController extends Controller
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
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        if ($request->ajax()){
            $items = CourseClassLecture::where('course_id',$courseID)->latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.courses.coursesClasses.lectures.index');
    }

    public function store(Request $request,$courseID,$courseClassID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        $data = $request->validate([
            'title' => 'required|string',
            'book' => 'sometimes|nullable|string',
            'explained' => 'sometimes|nullable|string',
        ]);
        $data['course_id'] = $courseID;
        $data['course_class_id'] = $courseClassID;
        CourseClassLecture::create($data);
        return redirect()->back()->with('success', 'تم انشاء الفصل بنجاح');
    }

    public function create($courseID,$courseClassID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        return view('admin.courses.coursesClasses.lectures.create');
    }

    public function edit($courseID,$courseClassID,$LectureID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        $item = CourseClassLecture::findorfail($courseClassID);
        return view('admin.courses.coursesClasses.lectures.edit', compact('item'));
    }

    public function update(Request $request, $courseID,$courseClassID,$LectureID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        $item = CourseClassLecture::findorfail($LectureID);
        $data = $request->validate([
            'title' => 'required|string',
            'book' => 'sometimes|nullable|string',
            'explained' => 'sometimes|nullable|string',
        ]);
        $item->update($data);
        return redirect()->back()->with('success','تم تعديل محتوي الفصل بنجاح');
    }

    public function destroy($courseID,$courseClassID,$LectureID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        CourseClassLecture::findorfail($LectureID)->delete();
        if (CourseClassLecture::find($LectureID)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }

    }
}
