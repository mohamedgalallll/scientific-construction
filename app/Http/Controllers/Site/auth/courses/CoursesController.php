<?php
namespace App\Http\Controllers\site\auth\courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class CoursesController extends Controller
{
    public function index()
    {
        return view('site.courses.courses');
    }
}
