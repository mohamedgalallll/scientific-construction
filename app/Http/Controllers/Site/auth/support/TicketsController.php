<?php
namespace App\Http\Controllers\Site\Auth\support;
use App\Http\Controllers\Controller;
use App\Model\Support;

class TicketsController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('site.support.tickets.index',compact('user'));
    }
    public function create()
    {
        $user = auth()->user();
        return view('site.support.tickets.create',compact('user'));
    }
}
