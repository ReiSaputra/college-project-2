<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create("content", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("id_file");
            $table->timestamps();
            $table->foreign("id_file")->references("id")->on("file_upload")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
