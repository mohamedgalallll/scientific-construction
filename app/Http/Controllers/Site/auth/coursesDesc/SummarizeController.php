<?php
namespace App\Http\Controllers\site\auth\coursesDesc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class SummarizeController extends Controller
{
    public function index()
    {
        $user=auth()->user();
        return view('site.courseDesc.summarize',compact('user'));
    }

}
