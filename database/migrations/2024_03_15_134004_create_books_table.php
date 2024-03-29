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
        Schema::create('books', function (Blueprint $table) {
            Schema::create('books', function (Blueprint $table) {
                $table->id();
                $table->string('book_name');
                $table->string('book_author');
    
                $table->foreignId('category_id')->constrained()->onDelete('cascade');
                $table->foreignId('center_id')->constrained()->onDelete('cascade');
    
                // $table->foreign('category_name_id')->references('id')->on('categories')->onDelete('cascade');
                // $table->foreign('center_name_id')->references('id')->on('centers')->onDelete('cascade');
    
                // $table->foreignId('category_name_id')->constrained()->onDelete('cascade');
                // $table->foreignId('center_name_id')->constrained()->onDelete('cascade');
                $table->integer('status')->default(1);
                $table->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
