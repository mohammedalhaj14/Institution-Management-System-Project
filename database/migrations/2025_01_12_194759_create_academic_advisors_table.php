<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('academic_advisors', function (Blueprint $table) {
            $table->id('academicAdvisorID');
            $table->string('AdvisorName');
            $table->foreignId('serviceID')->constrained('services')->references('serviceID')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_advisors');
    }
};
