<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'profile_pic' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('profile_pic')){
            $imageName = time().'.'.$request->profile_pic->extension();
            $request->profile_pic->move(public_path('images/profile_pics'), $imageName);
            $user->profile_pic = 'images/profile_pics/' . $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
