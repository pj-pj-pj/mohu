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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        
            $table->string('name');
            $table->string('type');
            $table->integer('atk')->default(100);
            $table->integer('spd')->default(20);
            $table->integer('def')->default(0);
            $table->integer('sharpness')->default(20);
            $table->text('description')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapons');
    }
};
