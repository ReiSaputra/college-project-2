<?php

namespace App\Http\Controllers\Interfaces;

use App\Http\Controllers\Interfaces\Course;

class Composite implements Course
{
    private $children = [];

    public function add(Course $component)
    {
        $this->children[] = $component;
    }

    public function operation()
    {
        foreach ($this->children as $child) {
            $child->operation();
        }
    }
}

?>