<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Str;

class participantController extends Controller
{
    public function index($id)
    {
        return view("dashboard.participantDashboard", [
            "id" => $id,
        ]);
    }
    public function view($id)
    {
        return view("joinCourse", [
            "id" => $id,
        ]);
    }
    public function joinCourse(Request $request)
    {

    }

}
