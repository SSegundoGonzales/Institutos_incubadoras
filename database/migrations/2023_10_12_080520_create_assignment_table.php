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
        Schema::create('assignment', function (Blueprint $table) {
            $table->id();
            $table->string('local');
            $table->unsignedBigInteger('headquarters_id');
            $table->unsignedBigInteger('career_id');

            $table->foreign('headquarters_id')->references('id')->on('headquarters');
            $table->foreign('career_id')->references('id')->on('career');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment');
    }
};
