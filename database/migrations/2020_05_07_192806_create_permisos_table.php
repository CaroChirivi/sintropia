<?php

/**
 * Archivo para la migración de la tabla permisos
 *
 * @author Carolina Tarapues <carotarapues@gmail.com>
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';

            $table->id();
            $table->foreignId('rol_id')->constrained()->onDelete('cascade');
            $table->foreignId('menu_id')->constrained()->onDelete('cascade');;
            $table->boolean('crear')->default(0);
            $table->boolean('borrar')->default(0);
            $table->boolean('ver')->default(0);
            $table->boolean('actualizar')->default(0);

            $table->unique(['rol_id', 'menu_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('permisos');
        Schema::enableForeignKeyConstraints();
    }
}
