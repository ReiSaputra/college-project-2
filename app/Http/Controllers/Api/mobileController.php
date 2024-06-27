<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\SimpleCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
    public function storeCourse(Request $request)
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

        $course = new SimpleCourse();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->course_type = $request->course_type;
        $course->id_user = $request->id_user;

        // Generate unique token (consider stronger hashing for production)
        $course->token = Str::random(15);
        $course->token = Str::random(15);

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
    public function updateCourse(Request $request, $id)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'description' => 'string',
            'course_type' => 'string',
            'id_user' => 'integer|exists:users,id', // User must exist
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 400);
        }

        try {
            $course = SimpleCourse::findOrFail($id); // Find the course by ID or throw 404 error

            // Update course attributes if they exist in the request
            if ($request->has('name'))
                $course->name = $request->name;
            if ($request->has('description'))
                $course->description = $request->description;
            if ($request->has('course_type'))
                $course->course_type = $request->course_type;
            if ($request->has('id_user'))
                $course->id_user = $request->id_user;

            $course->save();

            return response()->json([
                'status' => 200,
                'message' => 'Course updated successfully',
                'data' => $course,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 500,
                'message' => 'Internal server error',
                'error' => $th->getMessage(),
            ], 500);
        }
    }
    public function deleteCourse($id)
    {
        try {
            $delete = DB::table("course")->delete($id);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 200,
                'message' => 'Delete Success',
                'error' => $th->getMessage()
            ]);
        }
        return response()->json([
            'status' => 200,
        'message' => 'Delete Success']);
    }
}