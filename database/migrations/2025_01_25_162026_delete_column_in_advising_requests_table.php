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
        Schema::table('advising_requests', function (Blueprint $table) {
            // Drop the userID column
            $table->dropForeign(['userID']);
            $table->dropColumn('userID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('advising_requests', function (Blueprint $table) {
            // Re-add the userID column with foreign key constraint
            $table->unsignedBigInteger('userID'); // Ensure it's the same type as the users table's primary key
            $table->foreignId('userID')->constrained('users')->references('userID')->onDelete('cascade');
        });
    }
};
