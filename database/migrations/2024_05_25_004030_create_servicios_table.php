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
         Schema::create('servicios', function (Blueprint $table) {
            $table->increments('idservicios');
            $table->string('nombre', 50);
            $table->integer('idservicios_padre')->unsigned()->nullable();
            $table->foreign('idservicios_padre')->references('idservicios')->on('servicios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
