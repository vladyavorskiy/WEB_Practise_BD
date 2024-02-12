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
        Schema::create('turnover', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_country_1')->constrained('country');
            $table->foreignId('id_country_2')->constrained('country');
            $table->date('year');
            $table->integer('export_from1_to2');
            $table->integer('export_from2_to1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnover');
    }
};
