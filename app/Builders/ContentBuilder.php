<?php
namespace App\Builders;

use App\Models\Content;

class ContentBuilder
{
    protected $content;

    public function __construct()
    {
        $this->content = new Content();
    }

    public function setName(string $name): self
    {
        $this->content->name = $name;
        return $this;
    }

    public function setCourseId(int $courseId): self
    {
        $this->content->id_course = $courseId;
        return $this;
    }

    public function save(): Content
    {
        $this->content->save();
        return $this->content;
    }
}

?>