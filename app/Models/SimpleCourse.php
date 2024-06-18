<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpleCourse extends Model implements CourseComponent
{
    use HasFactory;
    protected $table = "course";
    protected $fillable = [
        'id',
        'name',
        'description',
        'course_type',
        'token',
        'id_user'
    ];
    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDetails(): array
    {
        return $this->toArray();
    }
}
