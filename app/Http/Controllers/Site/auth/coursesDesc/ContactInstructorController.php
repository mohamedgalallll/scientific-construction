<?php
namespace App\Http\Controllers\site\auth\coursesDesc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ContactInstructorController extends Controller
{
    public function index()
    {
        $user=auth()->user();
        return view('site.courseDesc.contact-instructor',compact('user'));
    }
}
