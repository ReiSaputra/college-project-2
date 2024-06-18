<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Models;

interface CourseComponent
{
    public function getName(): string;
    public function getDescription(): string;
    public function getDetails(): array;
}

