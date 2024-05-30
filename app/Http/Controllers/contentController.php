<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class contentController extends Controller
{
    //
    public function view(Request $request, $id, $courseTitle)
    {
        $course = DB::table("course")->where("id", "=", $courseTitle)->select("*")->get();
        $contents = DB::table('content')
        ->join('course', 'content.id_course', '=', 'course.id')
        ->join('file_upload', 'content.id', '=', 'file_upload.id_content')
        ->select('content.*', 'course.name as course_name', 'file_upload.filename', 'file_upload.filepath', 'file_upload.filetype')
        ->where('course.user_id', "=", Auth::id())
        ->get();

        return view("courseContent", [
            "id" => $id,
            "courseTitle" => $courseTitle,
            "course" => $course,
            "contents" => $contents
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
    public function addContent(Request $request, $id, $courseId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'courseId' => 'required|exists:course,id',
            'file' => 'required|file|max:10240',
        ]);

        // @dd($validator);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $content = new Content();
        $content->name = $request->input('name');
        $content->id_course = $request->input('courseId');
        $content->save();

        $lastInsertedId = $content->id;

        if ($request->hasFile('file')) {


            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filepath = $file->storeAs('uploads', $filename, 'public');

            $fileUpload = new FileUpload();
            $fileUpload->filename = $filename;
            $fileUpload->filepath = '/storage/' . $filepath;
            $fileUpload->filetype = $file->getClientMimeType();
            $fileUpload->filesize = $file->getSize();
            $fileUpload->id_content = $lastInsertedId;
            $fileUpload->save();
        }

        return redirect()->route("content.view", ["id" => $id, "courseId" => $courseId])->with('success', 'Content and file uploaded successfully!');
    
    }
}
