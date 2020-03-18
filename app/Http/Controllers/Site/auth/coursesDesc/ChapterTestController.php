<?php
namespace App\Http\Controllers\site\auth\coursesDesc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ChapterTestController extends Controller
{
    public function index()
    {
        return view('site.courseDesc.chapterTest');
    }

}
