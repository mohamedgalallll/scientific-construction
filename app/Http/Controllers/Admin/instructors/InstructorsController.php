<?php

namespace App\Http\Controllers\Admin\instructors;

use App\Http\Controllers\Controller;
use App\Model\Instructor;
use App\Model\User;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InstructorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:clients_show', ['only' => 'index', 'show']);
        $this->middleware('permission:clients_add', ['only' => 'store', 'create']);
        $this->middleware('permission:clients_edit', ['only' => 'edit', 'update']);
        $this->middleware('permission:clients_delete', ['only' => 'destroy']);
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $instructors = Instructor::all();
            return DataTables::of($instructors)->make(true);
        }
        return view('admin.instructors.index');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'excerpt' => 'sometimes|nullable|string',
            'about' => 'sometimes|nullable',
        ]);
        $image = $request->validate([
            'image' => 'sometimes|nullable|image',
        ]);

        $instructor =  Instructor::create($data);
        $instructor->addMediaFromRequest('image')->toMediaCollection('images');

//        $instructor->addMedia($request->image)->toMediaCollection('images');
        return redirect()->back()->with('success','تم انشاء المحاضر بنجاح');

    }

    public function create()
    {
        return view('admin.instructors.create');
    }

    public function edit($id)
    {
        $item = Instructor::findorfail($id);
        return view('admin.instructors.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Instructor::findorfail($id);
        $data = $request->validate([
            'name' => 'required|string',
            'excerpt' => 'sometimes|nullable|string',
            'about' => 'sometimes|nullable',
        ]);
        $image = $request->validate([
            'image' => 'sometimes|nullable|image',
        ]);
            $request->hasFile('image') ? $item->addMedia($request->image)->toMediaCollection('images') : '';

        $item->update($data);
        return redirect('admin/instructor')->with('success', 'تم تعديل بيانات المحاضر بنجاح');

    }

    public function destroy($id)
    {
        $item = Instructor::findorfail($id);
        $item->delete();
        if (Instructor::find($id)) {
            return response()->json(false, 404);
        } else {
            return response()->json(true, 202);
        }

    }
}
