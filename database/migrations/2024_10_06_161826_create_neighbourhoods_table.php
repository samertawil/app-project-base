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
        Schema::create('neighbourhoods', function (Blueprint $table) {
            $table->id();
            $table->string('neighbourhood_name',50);
            $table->foreignId('city_id')->constrained('cities');
            $table->string('description')->nullable();
            $table->json('attributes')->nullable();
            $table->unique(['neighbourhood_name','city_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neighbourhoods');
    }
};
