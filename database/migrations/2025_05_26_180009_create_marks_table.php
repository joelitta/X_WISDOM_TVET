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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
              // Manually specify table and column since it's not default
    $table->unsignedBigInteger('trainee_id');
    $table->foreign('trainee_id')->references('id')->on('trainee')->onDelete('cascade');

    $table->unsignedBigInteger('trade_id');
    $table->foreign('trade_id')->references('id')->on('trade')->onDelete('cascade');
    $table->float('formative_assessment');
    $table->float('summative_assessment');
    $table->float('percentage');
    $table->string('decision');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
