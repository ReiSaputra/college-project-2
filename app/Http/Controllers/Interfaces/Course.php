<?php
namespace App\Http\Controllers\Interfaces;
interface Course
{
    public function getId(): int;
    public function getName(): string;
    public function getChildren(): array;
}
?>