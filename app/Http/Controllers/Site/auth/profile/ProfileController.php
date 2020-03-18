<?php

namespace App\Http\Controllers\Site\Auth\profile;
use App\Http\Controllers\Controller;
use App\Model\Instructor;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        return view('site.profile.profile',compact('user'));
    }
    public function profile()
    {
        $user = auth()->user();
        return view('site.profile.profile-info',compact('user'));
    }
    public function editProfileInfo(Request $request)
    {
        $user = auth()->user();
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:11|unique:users,phone,' . $user->id,
            'country_id' => 'sometimes|nullable|integer',
            'city_id' => 'sometimes|nullable|integer',
            'gender' => 'sometimes|nullable|numeric|in:1,0',
        ]);
        $user->update($data);
        return redirect()->back()->with('success','تم تعديل البيانات بنجاح');
    }
    public function UpdatePassword(Request $request)
    {
        $user = auth()->User();
        if (Hash::check($request->old_password, $user->password)) {
            $data = $request->validate([
                'password' => 'required|min:6|confirmed',
            ]);
            $data['password'] = Hash::make($request->password);
            $user->update($data);
            return redirect()->back()->with('success','تم تعديل الرقم السري بنجاح');

        } else {
            return redirect()->back()->with('error', 'الرقم السري القديم غير صحيح');
        }
    }



}
