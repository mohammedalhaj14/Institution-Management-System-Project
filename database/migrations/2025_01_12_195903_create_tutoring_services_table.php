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
        Schema::create('tutoring_services', function (Blueprint $table) {
            $table->id('tutoringServiceID');
            $table->string('tutoringServiceName');
            $table->foreignId('serviceID')->constrained('services')->references('serviceID')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutoring_services');
    }
};
