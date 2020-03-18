<?php

namespace App\Http\Controllers\Site\Auth\howItWork;
use App\Http\Controllers\Controller;
use App\Model\Instructor;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class howItWorkController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('site.howItWork.index',compact('user'));
    }
}
