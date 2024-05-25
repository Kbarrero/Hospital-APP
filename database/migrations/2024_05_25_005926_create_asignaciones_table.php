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
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->increments('idAsignaciones');
            $table->dateTime('fecha_asignada')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('estado', ['llamado', 'en atención', 'atendido'])->default('llamado');
            $table->integer('idrecepcionistas')->unsigned();
            $table->integer('idturnos')->unsigned();            
            $table->foreign('idrecepcionistas')->references('idrecepcionistas')->on('recepcionistas');
            $table->foreign('idturnos')->references('idturnos')->on('turnos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaciones');
    }
};
