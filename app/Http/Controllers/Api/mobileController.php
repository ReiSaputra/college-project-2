<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            ], 200);
    }
}
