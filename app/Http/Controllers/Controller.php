<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Course;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;
    public function dashboard($mentorId)
    {
        // Logika untuk menampilkan dashboard
        return view('dashboard.mentorDashboard', ['id' => $mentorId]);
    }

    public function view($id)
    {
        $courses = DB::table('course as c')
            ->join('users as u', 'c.id_user', '=', 'u.id')
            ->where('c.id_user', Auth::id())
            ->select('c.*')
            ->get();
        return view("dashboard.mentorDashboard", [
            "id" => $id,
            "data" => $courses
        ]);
    }

    public function formCourse($id)
    {
        return view("createCourse", ["id" => $id]);
    }

    public function createCourse(Request $request, $id)
    {
        $validate = FacadesValidator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'string',
            'type' => 'required|string',
            'mentorName' => 'required|string',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        dd($request->all()); // Tambahkan ini untuk melihat data request
        
        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'course_type' => $request->type,
            'token' => Str::random(15),
            'id_user' => $id,
        ]);

        return redirect()->route("course.view", ["id" => $id]);
    }
} 
