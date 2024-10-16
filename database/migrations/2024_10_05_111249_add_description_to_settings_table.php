<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('description')->after('value');
            $table->text('notes')->nullable();
            $table->json('attributes')->nullable();
        });
    }

 
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
};
