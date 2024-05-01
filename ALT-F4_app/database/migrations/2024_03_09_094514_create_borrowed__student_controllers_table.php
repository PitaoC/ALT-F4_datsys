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
        Schema::create('borrowed__student_controllers', function (Blueprint $table) {
            $table->id();
            $table->string('Book_Name', 50);
            $table->string('Student_Name', 50);
            $table->string('Date_Borrowed', 50);
            $table->string('Status')->default('BORROWED');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowed__student_controllers');
    }
};
