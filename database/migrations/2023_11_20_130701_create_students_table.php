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
        Schema::create('students', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('name');
            $table->string('birth_year')->nullable();
            $table->char('gender', 1)->nullable();
            $table->string('class')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->primary('student_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
