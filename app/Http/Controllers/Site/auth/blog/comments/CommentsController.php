<?php
namespace App\Http\Controllers\site\auth\blog\comments;
use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\Blog;
use Illuminate\Http\Request;
class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:clients_add', ['only' => 'store', 'create']);
        $this->middleware('permission:clients_edit', ['only' => 'edit', 'update']);
        $this->middleware('permission:clients_delete', ['only' => 'destroy']);
    }

    public function store(Request $request, $blog_id)
    {
        $blog= Blog::findOrFail($blog_id);
        $data = $request->validate([
            'comment' => 'required|string',
        ]);
        $data['user_id'] =auth()->User()->id;
        $data['blog_id'] = $blog_id;
        Comment::create($data);
        return redirect()->back()->with('success','تم انشاء التعليق  بنجاح');
    }
    public function update(Request $request, $id)
    {
        $item = Comment::findorfail($id);
        $data = $request->validate([
            'comment' => 'required|string',
        ]);
        $item->update($data);
        return redirect()->back()->with('success', 'تم تعديل بيانات كلمات الموقع بنجاح');
    }

    public function destroy($id)
    {
        $item = Comment::findorfail($id);
        $item->delete();
        if (Comment::find($id)) {
            return response()->json(false, 404);
        } else {
            return response()->json(true, 202);
        }

    }
}
