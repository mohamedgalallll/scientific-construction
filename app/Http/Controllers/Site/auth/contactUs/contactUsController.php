<?php

namespace App\Http\Controllers\Site\Auth\contactUs;
use App\Http\Controllers\Controller;
use App\Model\Instructor;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class contactUsController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        return view('site.contactUs.index',compact('user'));
    }



}
