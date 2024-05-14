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
        Schema::create("mentor", function (Blueprint $table){
            $table->id();
            $table->string("name");
            $table->string("username")->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string("password");
            $table->string("email")->unique();
            $table->unsignedBigInteger("id_status");
            $table->timestamps();
            $table->foreign("id_status")->references("id")->on("status")->onDelete("cascade");
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
