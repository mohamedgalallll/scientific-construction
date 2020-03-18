<?php
namespace App\Http\Controllers\Site\Auth\support;
use App\Http\Controllers\Controller;
use App\Model\Support;

class QuestionsController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('site.support.commonQuestions.index',compact('user'));
    }

}
