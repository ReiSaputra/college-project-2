<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contentController extends Controller
{
    //
    public function view(Request $request, $id, $courseTitle)
    {
        $course = DB::table("course")->where("id", "=", $courseTitle)->select("*")->get();

        return view("courseContent", [
            "id" => $id,
            "courseTitle" => $courseTitle,
            "course" => $course
        ]);
    }
    public function viewContentForm($id, $courseTitle)
    {
        $course = DB::table("course")->where("id", "=", $courseTitle)->select("*")->get();

        foreach($course as $getCourse)
        {
            $courseId = $getCourse->id;
            $courseTitle = $getCourse->name;
        }

        return view("courseContentForm", [
            "id" => $id,
            "courseId" => $courseId,
            "courseTitle" => $courseTitle,
            "course" => $course
        ]);
    }
    public function addContent(Request $request)
    {

    }
}
