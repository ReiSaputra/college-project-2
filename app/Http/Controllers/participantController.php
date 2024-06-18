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
            "data" => $courses
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
        } else {
            return redirect()->back()->withErrors($course)->withInput();
        }
    }
    public function showMaterialCourse($id, $courseId)
    {
        $course = DB::table("course")->where("id", "=", $courseId)->select("*")->get();
        $contents = DB::table('content')
            ->join('course', 'content.id_course', '=', 'course.id')
            ->join('file_upload', 'content.id', '=', 'file_upload.id_content')
            ->select('content.*', 'course.name as course_name', 'file_upload.filename', 'file_upload.filepath', 'file_upload.filetype')
            ->where('course.id', "=", $courseId)
            ->get();

        return view("participantContent", [
            "id" => $id,
            "courseId" => $courseId,
            "course" => $course,
            "contents" => $contents
        ]);
    }
}
