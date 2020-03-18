<?php

namespace App\Http\Controllers\Admin\courses\courseClasses;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\CourseClass;
use App\Model\CourseClassBenefit;
use App\Model\CourseClassExam;
use App\Model\CourseClassInstructorContacts;
use App\Model\CourseClassQuestion;
use DataTables;
use Illuminate\Http\Request;

class CourseClassBenefitsController extends Controller
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
            $items = CourseClassBenefit::where('course_id',$courseID)->where('course_class_id',$courseClassID)->latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.courses.coursesClasses.benefits.index');
    }
    public function show($courseID,$courseClassID,$BenefitID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        $item = CourseClassBenefit::findOrFail($BenefitID);
        return view('admin.courses.coursesClasses.benefits.view', compact('item'));
    }
    public function destroy($courseID,$courseClassID,$BenefitID)
    {
        Course::findOrFail($courseID);
        CourseClass::findOrFail($courseClassID);
        CourseClassBenefit::findorfail($BenefitID)->delete();
        if (CourseClassBenefit::find($BenefitID)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }
    }
}
