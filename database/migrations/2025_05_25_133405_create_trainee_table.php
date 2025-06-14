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
        Schema::create('trainee', function (Blueprint $table) {
            $table->id();
            $table->string('Traineefname');
            $table->string('Traineelname');
            $table->timestamps();
            $table->unique(['Traineefname', 'Traineelname']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainee');
    }
};
