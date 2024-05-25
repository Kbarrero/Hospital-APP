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
         Schema::create('recepcionistas', function (Blueprint $table) {
            $table->increments('idrecepcionistas');
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->string('correo', 45)->unique();
            $table->string('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepcionistas');
    }
};
