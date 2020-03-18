<?php

namespace App\Http\Controllers\Admin\blog\comments;
use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\Blog;

use Illuminate\Http\Request;
use DataTables;
class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:clients_show', ['only' => 'index', 'show']);
        $this->middleware('permission:clients_add', ['only' => 'store', 'create']);
        $this->middleware('permission:clients_edit', ['only' => 'edit', 'update']);
        $this->middleware('permission:clients_delete', ['only' => 'destroy']);
    }
    public function index(Request $request ,$blog_id)
    {
        Blog::findOrFail($blog_id);
        if ($request->ajax()) {
            $comment = Comment::where('blog_id',$blog_id)->get();
            return DataTables::of($comment)->make(true);
        }
        return view('admin.blog.comments.index');
    }
    public function store(Request $request, $blog_id)
    {
        $post = Blog::findOrFail($blog_id);
        $data = $request->validate([
            'comment' => 'required|string',
        ]);
        $data['user_id'] = auth()->User()->id;
        $data['blog_id'] = $blog_id;
        Comment::create($data);
        return redirect()->back()->with('success','تم انشاء التعليق  بنجاح');
    }
    public function create()
    {
        return view('admin.blog.comments.create');
    }

    public function edit($blog_id,$comment_id)
    {
        $blog = Blog::findOrFail($blog_id);
        $comment = Comment::findOrFail($comment_id);
        return view('admin.blog.comments.edit', compact('comment'));
    }
    public function update(Request $request, $blog_id,$comment_id)
    {
        $blog = Blog::findOrFail($blog_id);
        $comment = Comment::findOrFail($comment_id);
        $data = $request->validate([
            'comment' => 'required|string',
        ]);
        $comment->update($data);
        return redirect()->back()->with('success', 'تم تعديل التعليق  بنجاح');
    }
    public function destroy($id)
    {
        $item = Comment::findOrFail($id);
        $item->delete();
        if (Comment::find($id)) {
            return response()->json(false, 404);
        } else {
            return response()->json(true, 202);
        }

    }
}
