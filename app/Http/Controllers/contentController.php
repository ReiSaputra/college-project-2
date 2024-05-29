<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contentController extends Controller
{
    //
    public function view(Request $request, $id, $courseTitle)
    {
        // $courses = DB::table("course")->;

        return view("courseContent", [
            "id" => $id,
            "courseTitle" => $courseTitle
        ]);
    }
}
