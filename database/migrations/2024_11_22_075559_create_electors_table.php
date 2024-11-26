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
        Schema::create('electors', function (Blueprint $table) {
            $table->id();
            $table->string('name_elector');
            $table->string('gender');
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
        Schema::dropIfExists('electors');
    }
};
