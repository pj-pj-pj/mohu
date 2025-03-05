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
        Schema::create('weapon_skills', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        
            $table->foreignId('weapon_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->integer('power')->default(0);
            $table->integer('stamina_cost')->default(0);
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapon_skills');
    }
};
