<?php
namespace App\Http\Controllers\Admin\about\instructorWords;
use App\Http\Controllers\Controller;
use App\Model\InstructorWord;
use DataTables;
use Illuminate\Http\Request;

class InstructorWordsController extends Controller
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
            $instructors = InstructorWord::all();
            return DataTables::of($instructors)->make(true);
        }
        return view('admin.about.instructorWords.index');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'words' => 'required|string',
            'instructor_id' => 'required|integer',
        ]);
       
        InstructorWord::create($data);
        return redirect()->back()->with('success','تم انشاء الكلمه بنجاح');
    }
    public function create()
    {
        return view('admin.instructors.create');
    }

    public function edit($id)
    {
        $instructor = InstructorWord::findorfail($id);
        return view('admin.about.instructorWords.edit', compact('instructor'));
    }
    public function update(Request $request, $id)
    {
        $item = InstructorWord::findorfail($id);
        $data = $request->validate([
            'words' => 'required|string',
            'instructor_id' => 'required|integer',
        ]);
      
        $item->update($data);
        return redirect('admin/instructor-words')->with('success', 'تم تعديل بيانات كلمات الموقع بنجاح');
    }

    public function destroy($id)
    {
        $item = InstructorWord::findorfail($id);
        $item->delete();
        if (InstructorWord::find($id)) {
            return response()->json(false, 404);
        } else {
            return response()->json(true, 202);
        }

    }
}
