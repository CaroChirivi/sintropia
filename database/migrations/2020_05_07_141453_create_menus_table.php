<?php

/**
 * Archivo para la migración de la tabla menus
 *
 * @author Carolina Tarapues <carotarapues@gmail.com>
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';

            $table->id();
            $table->string('descripcion', 100);
            $table->string('url', 100)->nullable();
            $table->string('ruta', 100)->nullable();
            $table->foreignId('padre_id')->nullable()->constrained('menus');
            $table->string('icono', 100)->nullable();
            $table->boolean('directo')->default(false);
            $table->string('icono_directo', 100)->nullable();
            $table->boolean('dibujar')->default(true);

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
        Schema::dropIfExists('menus');
        Schema::enableForeignKeyConstraints();
    }
}
