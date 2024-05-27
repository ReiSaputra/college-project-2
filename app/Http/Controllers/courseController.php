<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Str;

class courseController extends Controller
{
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
    public function formCourse()
    {
        return view("createCourse");
    }
    public function createCourse(Request $request, $id)
    {
        $validate = FacadesValidator::make($request->all(),[
            'name' => 'required|string|max:255',
            'description' => 'string',
            'type' => 'required|string',
            'mentorName' => 'required|string',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

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
