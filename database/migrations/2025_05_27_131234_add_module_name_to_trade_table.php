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
        Schema::table('trade', function (Blueprint $table) {
            $table->string('Module_name')->nullable()->after('trade_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trade', function (Blueprint $table) {
            $table->dropColumn('Module_name');

        });
    }
};
