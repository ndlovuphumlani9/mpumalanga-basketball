<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            // Personal Information
            $table->string('first_name');
            $table->string('surname');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('contact_number');
            $table->string('email')->nullable();

            // Basketball Information
            $table->string('position');
            $table->string('age_category');
            $table->string('district');
            $table->string('current_team')->nullable();

            // Emergency Contact
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_number');

            // Profile
            $table->string('profile_photo')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};