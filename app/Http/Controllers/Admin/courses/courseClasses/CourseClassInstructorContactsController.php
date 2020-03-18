<?php

namespace App\Http\Controllers\Admin\courses\courseClasses;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\CourseClass;
use App\Model\CourseClassExam;
use App\Model\CourseClassInstructorContacts;
use App\Model\CourseClassQuestion;
use DataTables;
use Illuminate\Http\Request;

class CourseClassInstructorContactsController extends Controller
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
            $items = CourseClassInstructorContacts::where('course_id',$courseID)->where('course_class_id',$courseClassID)->latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.courses.coursesClasses.instructorContacts.index');
    }
    public function edit($courseID,$courseClassID,$InstructorContactID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        $item = CourseClassInstructorContacts::findorfail($InstructorContactID);
        return view('admin.courses.coursesClasses.instructorContacts.edit', compact('item'));
    }
    public function update(Request $request, $courseID,$courseClassID,$InstructorContactID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        $item = CourseClassInstructorContacts::findorfail($InstructorContactID);
        $data = $request->validate([
            'answer' => 'required|string',
        ]);
        $item->update($data);
        return redirect()->back()->with('success','تم تعديل السؤال بنجاح بنجاح');
    }

    public function destroy($courseID,$courseClassID,$InstructorContactID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        CourseClassInstructorContacts::findorfail($InstructorContactID)->delete();
        if (CourseClassInstructorContacts::find($InstructorContactID)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }
    }
}
