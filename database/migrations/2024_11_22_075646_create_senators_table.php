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
        Schema::create('senators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->double('age');
            $table->timestamps();
            $table->foreignId('party_id')->constrained();
            $table->foreignId('state_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senators');
    }
};
