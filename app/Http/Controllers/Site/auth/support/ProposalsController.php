<?php
namespace App\Http\Controllers\Site\Auth\support;
use App\Http\Controllers\Controller;
use App\Model\Support;

class ProposalsController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('site.support.proposals.index',compact('user'));
    }
    public function show()
    {
        $user = auth()->user();
        return view('site.support.proposals.show',compact('user'));
    }
    public function create()
    {
        $user = auth()->user();
        return view('site.support.proposals.create',compact('user'));
    }
}
