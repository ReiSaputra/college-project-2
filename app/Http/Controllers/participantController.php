<?php

namespace App\Http\Controllers;

use App\Models\MentorEnrollList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Str;

class participantController extends Controller
{
    public function index($id)
    {
        $username = Auth::user()->name . "#" . Auth::user()->id;

        $courses = DB::table('mentor_enroll_list as m')->join("course as c", "c.id", "=", "m.id_course")->where("m.id_user", Auth::id())->select("c.*")->get();

        return view("dashboard.participantDashboard", [
            "id" => $id,
            "name" => $username,
            "courses" => $courses
        ]);
    }
    public function view($id)
    {
        return view("joinCourse", [
            "id" => $id,
        ]);
    }
    public function joinCourse(Request $request, $id)
    {
        $token = $request->only("token");

        $course = DB::table("course")->where("token", $token)->first();
        if ($course) {
            // Cek jika Pengguna telah mempunyai kursus yang sama
            $hasCourse = DB::table("mentor_enroll_list")->where("id_user", $id)->where("id_course", $course->id)->first();

            if ($hasCourse) {
                return redirect()->back()->withErrors($hasCourse)->withInput();
            } else {
                MentorEnrollList::create([
                    "id_user" => $id,
                    "id_course" => $course->id
                ]);
                return redirect()->route("participant.dashboard", [
                    "id" => $id
                ]);
            }

        }
    }

}
