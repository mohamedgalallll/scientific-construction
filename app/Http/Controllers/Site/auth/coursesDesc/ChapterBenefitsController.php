<?php
namespace App\Http\Controllers\site\auth\coursesDesc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ChapterBenefitsController extends Controller
{
    public function index()
    {
        $user=auth()->user();
        return view('site.courseDesc.chapterBenefits',compact('user'));
    }

}
