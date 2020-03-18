<?php

namespace App\Http\Controllers\Admin\courses\courses;

use App\Http\Controllers\Controller;
use App\Model\Course;
use DataTables;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:categories_show', ['only' => 'index', 'show']);
        $this->middleware('permission:categories_add', ['only' => 'store', 'create']);
        $this->middleware('permission:categories_edit', ['only' => 'edit', 'update']);
        $this->middleware('permission:categories_delete', ['only' => 'destroy']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()){
            $items = Course::latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.courses.courses.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'instructor_id' => 'required|string',
            'main_category_id' => 'required|string',
            'status' => 'required|integer',
            'description' => 'sometimes|nullable|string',
            'keyword' => 'sometimes|nullable|string',
        ]);
        $course = Course::create($data);
        $course->addMediaFromRequest('image')->toMediaCollection('images');
        return redirect('admin/courses')->with('success', 'تم انشاء الكورس بنجاح');
    }

    public function create()
    {
        return view('admin.courses.courses.create');
    }

    public function edit($id)
    {
        $item = Course::findorfail($id);
        return view('admin.courses.courses.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Course::findorfail($id);
        $data = $request->validate([
            'name' => 'required|string',
            'instructor_id' => 'required|string',
            'main_category_id' => 'required|string',
            'status' => 'required|integer',
            'description' => 'sometimes|nullable|string',
            'keyword' => 'sometimes|nullable|string',
        ]);
        $image = $request->validate([
            'image' => 'sometimes|nullable|image',
        ]);
        $request->hasFile('image') ? $item->addMedia($request->image)->toMediaCollection('images') : '';
        $item->update($data);
        return redirect()->back()->with('success','تم تعديل الكورس بنجاح');
    }

    public function destroy($id)
    {
       Course::findorfail($id)->delete();
        if (Course::find($id)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }

    }
}
