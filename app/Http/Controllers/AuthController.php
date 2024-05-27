<?php

namespace App\Http\Controllers;

use App\Models\mentor;
use App\Models\participant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{
    public function registerStudent(Request $request)
    {
        $validator = FacadesValidator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:1,2',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = participant::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('login')->with('success', 'Student registered successfully');
    }

    public function registerMentor(Request $request)
    {
        $validator = FacadesValidator::make($request->all(), [
            // 'name' => 'required|string|max:255',
            // 'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:Administrator,Student,Mentor',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_status' => $request->role,
        ]);

        return redirect()->route('login')->with('success', 'Mentor registered successfully');
    }

    public function showLoginForm()
    {
        return view ('auth.login');
    }

    public function login(Request $request)
    {
        $validator = FacadesValidator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Authentication passed
            $user = Auth::user();

            if ($user->role === 'Mentor') {
                return redirect()->route('course.view', ['id' => $user->id]);
            } elseif ($user->role === 'Student') {
                return redirect()->route('participant.dashboard', ['id' => $user->id]);
            } else {
                // Default redirect if role is unknown
                return redirect()->route('landing');
            }
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
