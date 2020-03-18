<?php

namespace App\Http\Controllers\Admin\courses\courseClasses;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\CourseClass;
use App\Model\CourseClassExam;
use App\Model\CourseClassInstructorContacts;
use App\Model\CourseClassQuestion;
use App\Model\CourseClassSummary;
use DataTables;
use Illuminate\Http\Request;

class CourseClassSummariesController extends Controller
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
            $items = CourseClassSummary::where('course_id',$courseID)->where('course_class_id',$courseClassID)->latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.courses.coursesClasses.summaries.index');
    }
    public function show($courseID,$courseClassID,$SummeryID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        $item = CourseClassSummary::findorfail($SummeryID);
        return view('admin.courses.coursesClasses.summaries.view', compact('item'));
    }
    public function update(Request $request, $courseID,$courseClassID,$SummeryID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        $item = CourseClassSummary::findorfail($SummeryID);
        $data = $request->validate([
            'answer' => 'required|string',
        ]);
        $item->update($data);
        return redirect()->back()->with('success','تم تعديل السؤال بنجاح بنجاح');
    }

    public function destroy($courseID,$courseClassID,$SummeryID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        CourseClassSummary::findorfail($SummeryID)->delete();
        if (CourseClassSummary::find($SummeryID)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }
    }
}
