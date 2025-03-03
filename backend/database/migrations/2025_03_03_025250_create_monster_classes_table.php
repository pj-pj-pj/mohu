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
        Schema::create('monster_classes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('name')->unique();
            $table->json('skills');
            $table->integer('base_health')->default(100);
            $table->integer('base_stamina')->default(200);
            $table->integer('base_attack')->default(50);
            $table->integer('base_defense')->default(50);
            $table->integer('base_speed')->default(35);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monster_classes');
    }
};
