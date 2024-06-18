<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CompositeCourse extends Model implements CourseComponent
{
    protected $table = 'courses';

    protected $fillable = [
        'id',
        'name',
        'description',
        'course_type',
        'token',
        'id_user'
    ];

    protected $children;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->children = new Collection();
    }

    public function add(CourseComponent $component)
    {
        $this->children->push($component);
    }

    public function remove(CourseComponent $component)
    {
        $this->children = $this->children->reject(function ($child) use ($component) {
            return $child === $component;
        });
    }

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
        $details = $this->toArray();
        $details['children'] = $this->children->map(function ($child) {
            return $child->getDetails();
        })->toArray();
        return $details;
    }
}