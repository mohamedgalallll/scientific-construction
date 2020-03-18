<?php

namespace App\Http\Controllers\Admin\courses\courseClasses;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\CourseClass;
use App\Model\CourseClassQuestion;
use DataTables;
use Illuminate\Http\Request;

class CourseClassesQuestionsController extends Controller
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
            $items = CourseClassQuestion::where('course_id',$courseID)->where('course_class_id',$courseClassID)->latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.courses.coursesClasses.questions.index');
    }
    public function destroy($courseID,$courseClassID,$QuestionID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        CourseClassQuestion::findorfail($QuestionID)->delete();
        if (CourseClassQuestion::find($QuestionID)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }
    }
}
