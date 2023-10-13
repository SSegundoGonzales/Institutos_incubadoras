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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surnames');
            $table->string('code');
            $table->string('mail');
            $table->string('phone',9);
            $table->string('address');
            $table->string('state');
            $table->unsignedBigInteger('career_id');
            $table->foreign('career_id')->references('id')->on('career');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
