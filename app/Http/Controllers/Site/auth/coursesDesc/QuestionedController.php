<?php
namespace App\Http\Controllers\site\auth\coursesDesc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class QuestionedController extends Controller
{
    public function index()
    {
        $user=auth()->user();
        return view('site.courseDesc.questioned',compact('user'));
    }
}
