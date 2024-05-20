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
        Schema::create("participant_enroll_list", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_participant");
            $table->unsignedBigInteger("id_course");
            $table->foreign("id_participant")->references("id")->on("participant")->onDelete("cascade");
            $table->foreign("id_course")->references("id")->on("course")->onDelete("cascade");
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
