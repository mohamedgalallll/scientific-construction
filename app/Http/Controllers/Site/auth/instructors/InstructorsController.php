<?php

namespace App\Http\Controllers\Site\Auth\instructors;
use App\Http\Controllers\Controller;
use App\Model\Instructor;
class InstructorsController extends Controller
{
   
    public function index()
    {
        $instructors = Instructor::all();
        return view('site.instructors.instructors',compact('instructors'));
    }

    public function show($id)
    {
        $instructor_desc = Instructor::findorfail($id);
        return view('site.instructors.instructor-desc', compact('instructor_desc'));
    }
   
}
