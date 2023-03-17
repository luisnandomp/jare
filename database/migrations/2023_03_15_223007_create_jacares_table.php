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
        Schema::create('jacares', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200);
            $table->decimal('peso', 5,2);
            $table->decimal('tamanho', 4,2);
            $table->string('sexo', 200);
            $table->string('vacinado', 200);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jacares');
    }
};
