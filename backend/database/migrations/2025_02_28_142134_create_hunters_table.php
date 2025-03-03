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
        Schema::create('hunters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->enum('sex', ['Male', 'Female'])->default('Male');
            $table->integer('character_slot');
            $table->string('hunter_rank')->default(1);
            $table->integer('tot_hr_points')->default(0);
            $table->integer('money')->default(0);
            $table->integer('health')->default(100);
            $table->integer('stamina')->default(100);
            $table->integer('attack')->default(0);
            $table->integer('defense')->default(1);
            $table->integer('speed')->default(60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hunters');
    }
};
