<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->integer('age');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->text('address');
            $table->string('marathon_category');
            $table->date('registration_date');
            $table->string('emergency_contact');
            $table->string('shirt_size');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};