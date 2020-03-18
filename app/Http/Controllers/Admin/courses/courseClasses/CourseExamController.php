<?php

namespace App\Http\Controllers\Admin\courses\courseClasses;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\CourseExam;
use DataTables;
use Illuminate\Http\Request;

class CourseExamController extends Controller
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
            $items = CourseExam::where('course_id',$courseID)->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.courses..courses.exams.index');
    }
    public function create($courseID)
    {
        Course::findOrFail($courseID);
        return view('admin.courses..courses.exams.create');
    }
    public function store(Request $request,$courseID)
    {
        Course::findOrFail($courseID);
        $data = $request->validate([
            'question' => 'required|string',
            'answer_1' => 'sometimes|nullable|string',
            'answer_2' => 'sometimes|nullable|string',
            'answer_3' => 'sometimes|nullable|string',
            'answer_4' => 'sometimes|nullable|string',
            'correct_answer' => 'required|in:answer_1,answer_2,answer_3,answer_4',
        ]);
        $data['correct_answer'] == 'answer_1' ? $data['correct_answer'] = $data['answer_1'] : '';
        $data['correct_answer'] == 'answer_2' ? $data['correct_answer'] = $data['answer_2'] : '';
        $data['correct_answer'] == 'answer_3' ? $data['correct_answer'] = $data['answer_3'] : '';
        $data['correct_answer'] == 'answer_4' ? $data['correct_answer'] = $data['answer_4'] : '';
        $data['course_id'] = $courseID;
        CourseExam::create($data);
        return redirect()->back()->with('success', 'تم انشاء السؤال بنجاح');
    }

    public function update(Request $request,$courseID,$questionID)
    {
        Course::findOrFail($courseID);
        $item = CourseExam::findorfail($questionID);
        $data = $request->validate([
            'question' => 'required|string',
            'answer_1' => 'sometimes|nullable|string',
            'answer_2' => 'sometimes|nullable|string',
            'answer_3' => 'sometimes|nullable|string',
            'answer_4' => 'sometimes|nullable|string',
            'correct_answer' => 'required|in:answer_1,answer_2,answer_3,answer_4',
        ]);
        $data['correct_answer'] == 'answer_1' ? $data['correct_answer'] = $data['answer_1'] : '';
        $data['correct_answer'] == 'answer_2' ? $data['correct_answer'] = $data['answer_2'] : '';
        $data['correct_answer'] == 'answer_3' ? $data['correct_answer'] = $data['answer_3'] : '';
        $data['correct_answer'] == 'answer_4' ? $data['correct_answer'] = $data['answer_4'] : '';
        $item->update($data);
        return redirect()->back()->with('success','تم تعديل السؤال بنجاح بنجاح');
    }
    public function edit($courseID,$questionID)
    {
        Course::findOrFail($courseID);
        $item = CourseExam::findorfail($questionID);
        return view('admin.courses..courses.exams.edit', compact('item'));
    }
    public function destroy($courseID,$questionID)
    {
        Course::findOrFail($courseID);
        CourseExam::findorfail($questionID)->delete();
        if (CourseExam::find($questionID)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }

    }

}
