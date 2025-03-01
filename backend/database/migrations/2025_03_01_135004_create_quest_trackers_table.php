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
        Schema::create('quest_trackers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('quest_id')->constrained()->cascadeOnDelete();
            $table->foreignId('hunter_id')->constrained()->cascadeOnDelete();
            $table->enum('status', ['not started', 'in progress', 'completed'])->default('not started');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quest_trackers');
    }
};
