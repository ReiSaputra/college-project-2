<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class testMailController extends Controller
{
    public function sendEmail(): string
    {
        $newMail = new testMail(); 

        $newMail->content();
    }
}
