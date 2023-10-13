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
        Schema::create('investigation', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');

            $table->unsignedBigInteger('lines_id'); // Clave foránea para 'lines_id'
            $table->foreign('lines_id')->references('id')->on('line');

            $table->unsignedBigInteger('financing_id'); 
            $table->foreign('financing_id')->references('id')->on('Financing');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investigation');
    }
};
