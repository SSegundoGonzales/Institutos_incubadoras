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
        Schema::create('career', function (Blueprint $table) {
            $table->id();
            $table->string('program');
            $table->string('name');
            $table->string('acronym');
            $table->unsignedBigInteger('faculty_id'); // Agrega la columna 'faculty_id' de tipo entero sin signo.

            $table->foreign('faculty_id')->references('id')->on('faculty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career');
    }
};
