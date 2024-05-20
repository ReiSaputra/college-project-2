<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class testMailController extends Controller
{
    public function sendEmail(): string
    {
        $newMail = new testMail();

        $data = "test";



        // Mail::later(5, $newMail, function use);

        // Mail::to("hanskysaputra@gmail.com")->;

        return "Mail successfully sent!";
    }
}
