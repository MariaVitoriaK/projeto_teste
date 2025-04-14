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
        Schema::create('filmes_series', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->longText('sinopse');
            $table->date('dataLanc');
            $table->integer('duracao'); // 
            $table->integer('temporadas');
            $table->string('tipo'); // not null
            $table->text('capa');
            $table->string('genero');
            $table->foreignId('genero_id')->constrained('generos')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes_series');
    }
};
