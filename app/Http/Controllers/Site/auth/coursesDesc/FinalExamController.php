<?php
namespace App\Http\Controllers\site\auth\coursesDesc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class FinalExamController extends Controller
{
    public function index()
    {
        return view('site.courseDesc.finalExam');
    }

}
