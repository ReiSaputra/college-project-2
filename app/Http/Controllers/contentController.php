<?php

namespace App\Http\Controllers;

use App\Builders\ContentBuilder;
use App\Builders\FileUploadBuilder;
use App\Models\Content;
use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class contentController extends Controller
{
    //
    public function view($id)
{
    $course = DB::table("course")->where("id", "=", $id)->select("*")->get();
    $contents = DB::table('content')
    ->join('course', 'content.id_course', '=', 'course.id')
    ->join('file_upload', 'content.id', '=', 'file_upload.id_content')
    ->select('content.*', 'course.name as course_name', 'file_upload.filename', 'file_upload.filepath', 'file_upload.filetype')
    ->where('course.id_user', "=", Auth::id())
    ->get();

    return view("courseContent", [
        "id" => $id,
        // "courseTitle" => $courseTitle, // Jika Anda masih membutuhkan data courseTitle, pastikan Anda mendapatkannya dengan cara lain
        "course" => $course,
        "contents" => $contents
    ]);
}
}
