<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('bmi_logs', function (Blueprint $table) {
            $table->id();
            $table->float('height_cm');
            $table->float('weight_kg');
            $table->float('bmi_score');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bmi_logs');
    }
};