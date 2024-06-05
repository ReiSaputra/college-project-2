<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class mobileController extends Controller
{
    public function selectCourse()
    {
        try {
            $data = DB::table("course")->select()->get();
        } catch (\Throwable $th) {
            return response()->json(
                [
                    "status" => 400,
                    "message" => $th
                ]
            );
        }

        return response()->json(
            [
                "message" => $data
            ],
            200
        );
    }
    public function createCourse(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'course_type' => 'required|string',
            'id_user' => 'required|integer|exists:users,id', // User harus ada
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 400);
        }

        $course = new Course;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->course_type = $request->course_type;
        $course->id_user = $request->id_user;

        // Generate unique token (consider stronger hashing for production)
        $course->token = uniqid();

        try {
            $course->save();

            return response()->json([
                'status' => 201,
                'message' => 'Course created successfully',
                'data' => $course,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 500,
                'message' => 'Internal server error',
                'error' => $th->getMessage(),
            ], 500);
        }
    }
    public function updateCourse()
    {
        
    }
}
