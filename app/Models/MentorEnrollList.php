<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorEnrollList extends Model
{
    use HasFactory;
    protected $table = "mentor_enroll_list";
    protected $fillable = [
        "id_user",
        "id_course"
    ];
}
