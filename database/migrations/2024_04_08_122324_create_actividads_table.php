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
        Schema::disableForeignKeyConstraints();

        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('activo_fijo');
            $table->string('rrhh');
            $table->integer('hrs_unidades');
            $table->integer('sub_total_uf');
            $table->integer('sub_total_pesos');
            $table->foreignId('item_id');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividads');
    }
};
