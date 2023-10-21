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
        Schema::create('bloods', function (Blueprint $table) {
            $table->id();
            $table->string('donate_date')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('donor_name')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('corona')->nullable();
            $table->string('hepatitis')->nullable();
            $table->string('aggree')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloods');
    }
};