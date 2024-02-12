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
        Schema::create('economy', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_country')->constrained('country');
            $table->date('year');
            $table->integer('GDP');
            $table->integer('GDP_person');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('economy');
    }
};
