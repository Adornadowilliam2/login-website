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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id')->primary(); // optimus primary pho king ina ng optimum prime yan oha arghg rah cwdwd
            $table->string('user_name');
            $table->string('password')->unique();
            $table->string('mobile')->nullable();
            $table->string('email');
            $table->enum('role_id', ['admin', 'user', 'guest']); // Use ENUM type for role_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
