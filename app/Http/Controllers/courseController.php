<?php

namespace App\Http\Controllers;

use App\Models\CompositeCourse;
use App\Models\SimpleCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function dashboard($mentorId)
    {
        return view('dashboard.mentorDashboard', ['id' => $mentorId]);
    }

    public function view($id)
    {
        $courses = DB::table('course as c')
            ->join('users as u', 'c.id_user', '=', 'u.id')
            ->where('c.id_user', Auth::id())
            ->select('c.*')
            ->get();

        $courseComponents = $courses->map(function ($courseData) {
            $course = new SimpleCourse((array) $courseData);
            return $course;
        });

        return view("dashboard.mentorDashboard", [
            "id" => $id,
            "data" => $courseComponents
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

        $course = new SimpleCourse([
            'name' => $request->name,
            'description' => $request->description,
            'course_type' => $request->type,
            'token' => Str::random(15),
            'id_user' => $id,
        ]);

        $course->save();

        return redirect()->route("course.view", ["id" => $id]);
    }
}
