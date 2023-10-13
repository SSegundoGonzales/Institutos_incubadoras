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
        Schema::create('thesis_project', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->decimal('amount', 10, 2);
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('title');
            $table->text('resolution');
            $table->text('specifications');
            $table->string('nombre_monitor');

            // $table->unsignedBigInteger('contest_id');
            // $table->unsignedBigInteger('financing_id');
            // $table->unsignedBigInteger('headquarters_id');
            // $table->unsignedBigInteger('routes_id');
            // $table->unsignedBigInteger('category_id');
            // $table->unsignedBigInteger('line_id');
            // $table->unsignedBigInteger('adviser_id');

            $table->foreignId('contest_id')->constrained('contest');
            $table->foreignId('financing_id')->constrained('financing');
            $table->foreignId('headquarters_id')->constrained('headquarters');
            $table->foreignId('route_id')->constrained('routes');
            $table->foreignId('category_id')->constrained('category');
            $table->foreignId('line_id')->constrained('line');
            $table->foreignId('advisor_id')->constrained('adviser');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thesis_project');
    }
};
