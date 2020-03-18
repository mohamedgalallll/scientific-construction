<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Model\Instructor;
use App\Model\SocialAccount;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{

    public function FacebookRedirect()
    {
        if (auth()->check()) {
            abort(404);
        } else {
            return Socialite::driver('facebook')->redirect();
        }
    }

    public function FacebookRedirectCallBack()
    {
        $user = Socialite::driver('facebook')->user();
        $SocialAccount = SocialAccount::where('social_media_id', $user->id)->orWhere('email', $user->email)->first();
        $checkUser = User::where('email', $user->email)->first();
        if ($SocialAccount) {
            $myUser = User::findOrFail($SocialAccount->user_id);
            Auth::login($myUser);
            return redirect('/')->with('success', 'مرحبا بك في هير موسي ');
        } elseif ($checkUser) {
            Auth::login($checkUser);
            return redirect('/')->with('success', 'مرحبا بك في هير موسي ');
        } else {
            $userData = [
                'name' => $user->name,
                'email' => $user->email,
                'user_image' => $user->avatar_original,
                'password' => Hash::make(rand(000, 999999999))
            ];
            $createdUser = User::create($userData);
            $socialData = [
                'nickname' => $user->nickname,
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'avatar_original' => $user->avatar_original,
                'profileUrl' => $user->profileUrl,
                'social_media_id' => $user->id,
                'social_media_type' => 'FaceBook',
                'user_id' => $createdUser->id,
            ];
            SocialAccount::create($socialData);
            Auth::login($createdUser);
            return redirect('/')->with('success', 'مرحبا بك في هير موسي ');
        }
    }

    public function GoogleRedirect()
    {
        if (auth()->check()) {
            abort(404);
        } else {
            return Socialite::driver('Google')->redirect();
        }
    }

    public function GoogleRedirectCallBack()
    {
        $user = Socialite::driver('Google')->user();
        $SocialAccount = SocialAccount::where('social_media_id', $user->id)->orWhere('email', $user->email)->first();
        $checkUser = User::where('email', $user->email)->first();
        if ($SocialAccount) {
            $myUser = User::findOrFail($SocialAccount->user_id);
            Auth::login($myUser);
            return redirect('/')->with('success', 'مرحبا بك في هير موسي ');
        } elseif ($checkUser) {
            Auth::login($checkUser);
            return redirect('/')->with('success', 'مرحبا بك في هير موسي ');
        } else {
            $userData = [
                'name' => $user->name,
                'email' => $user->email,
                'user_image' => $user->avatar_original,
                'password' => Hash::make(rand(000, 999999999))
            ];
            $createdUser = User::create($userData);
            $socialData = [
                'nickname' => $user->nickname,
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'avatar_original' => $user->avatar_original,
                'profileUrl' => $user->profileUrl,
                'social_media_id' => $user->id,
                'social_media_type' => 'Google',
                'user_id' => $createdUser->id,
            ];
            SocialAccount::create($socialData);
            Auth::login($createdUser);
            return redirect('/')->with('success', 'مرحبا بك في هير موسي ');
        }
    }



}
