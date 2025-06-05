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
        Schema::create('peripheriques', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('numero_serie')->unique();
            $table->string('nom');
            $table->string('type');
            $table->string('sous_famille');
            $table->text('description')->nullable();
            $table->string('etat')->default('actif');
            $table->string('interface');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peripheriques');
    }
};
