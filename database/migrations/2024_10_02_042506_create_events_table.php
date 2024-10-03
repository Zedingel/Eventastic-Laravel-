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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('occasion', 255); // Specify length if needed
            $table->integer('guests');
            $table->string('event_repeat', 100); // Specify length if needed
            $table->string('venue', 255); // Specify length if needed
            $table->date('event_date');
            $table->string('time_of_day', 100); // Specify length if needed
            $table->string('event_duration', 100); // Specify length if needed
            $table->string('theme', 255); // Specify length if needed
            $table->string('decor', 255); // Specify length if needed
            $table->text('catering'); // Use text if it's too long
            $table->string('budget', 100); // Specify length if needed
            $table->string('music', 255); // Specify length if needed
            $table->string('photo_entertainment', 255); // Specify length if needed
            $table->string('name', 255); // Specify length if needed
            $table->string('email')->unique(); // Ensure email is unique
            $table->string('phone', 20); // Limit phone length
            $table->string('company')->nullable();
            $table->text('special_requests')->nullable();
            $table->text('access_requirements')->nullable();
            $table->text('dietary_restrictions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
