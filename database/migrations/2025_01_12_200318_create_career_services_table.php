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
        Schema::create('career_services', function (Blueprint $table) {
            $table->id('careerServiceID');
            $table->string('careerServiceName');
            $table->foreignId('serviceID')->constrained('services')->references('serviceID')->onDelete('cascade'); // Relates to services
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_services');
    }
};
