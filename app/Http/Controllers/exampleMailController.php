<?php

namespace App\Http\Controllers;

use App\Mail\exampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class exampleMailController extends Controller
{
    //
    public function sendEmail()
    {
        $newMail = new exampleMail();

        Mail::to("hanskysaputra@gmail.com")->send($newMail);

        return "Mail successfully sent!";
    }
}
