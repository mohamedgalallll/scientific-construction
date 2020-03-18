<?php
namespace App\Http\Controllers\site\auth\coursesDesc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class BenefitsController extends Controller
{
    public function index()
    {
        $user=auth()->user();
        return view('site.courseDesc.benefits',compact('user'));
    }

}
