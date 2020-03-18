<?php
namespace App\Http\Controllers\Site\Auth\support;
use App\Http\Controllers\Controller;
use App\Model\Support;

class SupportController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('site.support.index',compact('user'));
    }
}
