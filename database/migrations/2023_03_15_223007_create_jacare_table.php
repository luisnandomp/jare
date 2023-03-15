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
        Schema::create('jacare', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->decimal('peso', 2.0);
            $table->decimal('tamanho', 2.0);
            $table->boolean('sexo');
            $table->boolean('vacinado')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jacare');
    }
};
