<?php
namespace App\Http\Controllers\Site\Auth\about;
use App\Http\Controllers\Controller;
use App\Model\About;
use App\Model\Achievement;
use App\Model\InstructorWord;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        $achievements = Achievement::all();
        $instructorWords = InstructorWord::all();
        return view('site.about.about',compact('about', 'achievements','instructorWords'));
    }
}
