<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('title', 100);
            $table->integer('duration_minutes');
            $table->enum('level', ['Easy', 'Medium', 'Hard']);
            $table->string('calories_burned', 50)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('is_featured')->default(0)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workouts');
    }
};