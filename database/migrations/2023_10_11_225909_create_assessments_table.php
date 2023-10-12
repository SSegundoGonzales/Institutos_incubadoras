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
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('phases_id');
            $table->unsignedBigInteger('criterias_id');
            $table->string('state');
            $table->timestamps();

            $table->foreign('phases_id')->references('id')->on('phases');
            $table->foreign('criterias_id')->references('id')->on('criterias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
