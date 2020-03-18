<?php

namespace App\Http\Controllers\Site\Home;
use App\Http\Controllers\Controller;
use App\Model\Instructor;
use Illuminate\Http\Request;
class HomeController extends Controller
{

    public function index()
    {
        $instructors = Instructor::all();
        return view('site.home.index',compact('instructors'));
    }
}
