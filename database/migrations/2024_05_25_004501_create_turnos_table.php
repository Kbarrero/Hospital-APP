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
       Schema::create('turnos', function (Blueprint $table) {
            $table->increments('idturnos');
            $table->integer('numero')->nullable();
            $table->dateTime('fecha_solicitud')->nullable();
            $table->enum('estado', ['pendiente', 'completado', 'cancelado'])->default('pendiente');
            $table->dateTime('fecha_asignacion')->nullable();
            $table->integer('idpacientes')->unsigned()->nullable();
            $table->integer('idservicios')->unsigned()->nullable();
            $table->foreign('idpacientes')->references('idpacientes')->on('pacientes');
            $table->foreign('idservicios')->references('idservicios')->on('servicios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('turnos');
    }
};
