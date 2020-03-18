<?php

namespace App\Http\Controllers\Site\Auth\notifications;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Instructor;

class NotificationsController extends Controller
{
    public function index()
    {
        $user= auth()->user();
        return view('site.notifications.index',compact('user'));
    }


}
