<?php

namespace App\Http\Controllers\Site\Auth\exams;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Instructor;

class ExamsController extends Controller
{
    public function index()
    {
        $user= auth()->user();
        return view('site.exam.index',compact('user'));
    }


}
