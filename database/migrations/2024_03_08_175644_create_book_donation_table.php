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
        Schema::create('book_donation', function (Blueprint $table) {
            $table->id();
            $table->string('donor_name');
            $table->string('book_name');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('donated_author');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('center_id')->constrained()->onDelete('cascade');
            $table->date('donation_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_donation');
    }
};
