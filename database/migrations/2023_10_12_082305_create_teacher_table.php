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
        Schema::create('teacher', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('name');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('assignment_id');
    
            $table->foreign('category_id')->references('id')->on('teacher_category');
            $table->foreign('assignment_id')->references('id')->on('assignment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher');
    }
};
