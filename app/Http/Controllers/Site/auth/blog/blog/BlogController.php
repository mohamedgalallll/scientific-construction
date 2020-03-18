<?php
namespace App\Http\Controllers\Site\Auth\blog\blog;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\Comment;

class BlogController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $blogPosts=Blog::where('status',1)->get();
        return view('site.notifications.notifications',compact('blogPosts','user'));
    }
    public function show($id)
    {
        $user = auth()->user();
        $blog = Blog::findorfail($id);
        $comments = Comment::where('blog_id',$id)->get();
            return view('site.notifications.blogShow', compact('blog','user','comments'));
        }

}

