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

        Mail::to("hanskysaputra@gmail.com")->send($newMail);
        return "Mail successfully sent!";
    }
}
