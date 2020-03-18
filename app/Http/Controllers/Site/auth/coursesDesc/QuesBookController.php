<?php
namespace App\Http\Controllers\site\auth\coursesDesc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class QuesBookController extends Controller
{
    public function index()
    {
        return view('site.courseDesc.ques-book');
    }

}
