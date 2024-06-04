<?php
namespace App\Builders;

use App\Models\FileUpload;

class FileUploadBuilder
{
    protected $fileUpload;

    public function __construct()
    {
        $this->fileUpload = new FileUpload();
    }

    public function setFilename(string $filename): self
    {
        $this->fileUpload->filename = $filename;
        return $this;
    }

    public function setFilepath(string $filepath): self
    {
        $this->fileUpload->filepath = $filepath;
        return $this;
    }

    public function setFiletype(string $filetype): self
    {
        $this->fileUpload->filetype = $filetype;
        return $this;
    }

    public function setFilesize(int $filesize): self
    {
        $this->fileUpload->filesize = $filesize;
        return $this;
    }

    public function setContentId(int $contentId): self
    {
        $this->fileUpload->id_content = $contentId;
        return $this;
    }

    public function save(): FileUpload
    {
        $this->fileUpload->save();
        return $this->fileUpload;
    }
}

?>