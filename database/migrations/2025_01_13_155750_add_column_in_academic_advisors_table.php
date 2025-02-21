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
        Schema::table('academic_advisors', function (Blueprint $table) {
            $table->string('advisorMajor',length:70);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('academic_advisors', function (Blueprint $table) {
             $table->dropColumn('advisorMajor');
        });
    }
};
