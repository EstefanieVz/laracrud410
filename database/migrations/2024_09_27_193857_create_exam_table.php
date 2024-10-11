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
        Schema::create('exam', function (Blueprint $table) {
            $table->id('Id_Calificaciones');
            $table->foreignId('Id_Asignatura')->unsigned();
            $table->string('Titulo', 60)->nullable();
            $table->foreignId('Id_Estudiante')->unsigned();
            $table->integer('Matricula')->unsigned();
            $table->double('Nota', 3, 2)->nullable();
            $table->foreignId('Id_Periodo')->unsigned();
            $table->string('Parcial', 30)->nullable();
            $table->timestamps();

            $table->foreign('Id_Asignatura')->references('Id_Asignatura')->on('asignatura')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('Id_Estudiante')->references('Id_Estudiantes')->on('estudiantes')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('Id_Periodo')->references('Id_Periodo')->on('periodo')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam');
    }
};
