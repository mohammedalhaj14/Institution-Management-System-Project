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
        Schema::create('advising_requests', function (Blueprint $table) {
            $table->id('advisingRequestID');
            $table->foreignId('userID')->constrained('users')->references('userID')->onDelete('cascade');
            $table->string('fullName');
            $table->string('email');
            $table->string('advisor');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advising_requests');
    }
};
