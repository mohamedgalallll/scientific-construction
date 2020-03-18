<?php

namespace App\Http\Controllers\Admin\courses\courseClasses;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\CourseClass;
use DataTables;
use Illuminate\Http\Request;

class CourseClassesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:categories_show', ['only' => 'index', 'show']);
        $this->middleware('permission:categories_add', ['only' => 'store', 'create']);
        $this->middleware('permission:categories_edit', ['only' => 'edit', 'update']);
        $this->middleware('permission:categories_delete', ['only' => 'destroy']);
    }

    public function index(Request $request,$courseID)
    {
        Course::findOrFail($courseID);
        if ($request->ajax()){
            $items = CourseClass::where('course_id',$courseID)->latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.courses.coursesClasses.classes.index');
    }

    public function store(Request $request,$courseID)
    {
        Course::findOrFail($courseID);
        $data = $request->validate([
            'title' => 'required|string',
        ]);
        $data['course_id'] = $courseID;
        CourseClass::create($data);
        return redirect()->back()->with('success', 'تم انشاء الفصل بنجاح');
    }


    public function edit($courseID,$courseClassID)
    {
        Course::findOrFail($courseID);
        $item = CourseClass::findorfail($courseClassID);
        return view('admin.courses.coursesClasses.classes.edit', compact('item'));
    }

    public function update(Request $request, $courseID,$courseClassID)
    {
        Course::findOrFail($courseID);
        $item = CourseClass::findorfail($courseClassID);
        $data = $request->validate([
            'title' => 'required|string',
        ]);
        $item->update($data);
        return redirect()->back()->with('success','تم تعديل محتوي الفصل بنجاح');
    }

    public function destroy( $courseID,$courseClassID)
    {
        CourseClass::findorfail($courseClassID)->delete();
        if (CourseClass::find($courseClassID)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }

    }
}
