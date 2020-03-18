<?php
namespace App\Http\Controllers\Admin\about\achievementsTheSite;
use App\Http\Controllers\Controller;
use App\Model\Achievement;
use DataTables;
use Illuminate\Http\Request;
class AchievementsController extends Controller
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
            $achievements = Achievement::all();
            return DataTables::of($achievements)->make(true);
        }
        return view('admin.about.achievement.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);
        $image = $request->validate([
            'image' => 'required|image',
        ]);
        $instructor =  Achievement::create($data);
        $instructor->addMediaFromRequest('image')->toMediaCollection('images');

        return redirect()->back()->with('success','تم انشاء الانجاز بنجاح');
    }

    public function create()
    {
        return view('admin.about.achievement.create');
    }

    public function edit($id)
    {
        $item = Achievement::findorfail($id);
        return view('admin.about.achievement.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Achievement::findorfail($id);
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $image = $request->validate([
            'image' => 'required|image',
        ]);
        $item->update($data);
        $request->hasFile('image') ? $item->addMedia($request->image)->toMediaCollection('images') : '';
        return redirect('admin/achievement-the-site')->with('success', 'تم تعديل بيانات الانجاز بنجاح');

    }

    public function destroy($id)
    {
        $item = Achievement::findorfail($id);
        $item->delete();
        if (Achievement::find($id)) {
            return response()->json(false, 404);
        } else {
            return response()->json(true, 202);
        }

    }
}
