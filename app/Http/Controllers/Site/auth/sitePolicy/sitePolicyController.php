<?php

namespace App\Http\Controllers\Site\Auth\sitePolicy;
use App\Http\Controllers\Controller;
use App\Model\Instructor;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class sitePolicyController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        return view('site.sitePolicy.index',compact('user'));
    }



}
