<?php

namespace App\Http\Controllers\Admin\blog\blog;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use Illuminate\Http\Request;
use DataTables;

class BlogController extends Controller
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
            $blog = Blog::all();
            return DataTables::of($blog)->make(true);
        }
        return view('admin.blog.blog.index');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'course_id' => 'sometimes|nullable|integer',
        ]);

        $image = $request->validate([
            'image' => 'sometimes|nullable|image',
        ]);
        $blog = Blog::create($data);
        $blog->addMediaFromRequest('image')->toMediaCollection('images');

        return redirect()->back()->with('success','تم انشاء المدونه  بنجاح');
    }
    public function create()
    {
        return view('admin.blog.blog.create');
    }

    public function edit($id)
    {
        $Blog = Blog::findorfail($id);
        return view('admin.blog.blog.edit', compact('Blog'));
    }
    public function update(Request $request, $id)
    {
        $item = Blog::findorfail($id);
        $data = $request->validate([
            'title' => 'required|string',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'course_id' => 'sometimes|nullable|integer',
        ]);

        $image = $request->validate([
            'image' => 'sometimes|nullable|image',
        ]);
            $request->hasFile('image') ? $item->addMedia($request->image)->toMediaCollection('images') : '';

        $item->update($data);
        return redirect('admin/blog')->with('success', 'تم تعديل بيانات المدونه  بنجاح');
    }

    public function destroy($id)
    {
        $item = Blog::findorfail($id);
        $item->delete();
        if (Blog::find($id)) {
            return response()->json(false, 404);
        } else {
            return response()->json(true, 202);
        }

    }

}
