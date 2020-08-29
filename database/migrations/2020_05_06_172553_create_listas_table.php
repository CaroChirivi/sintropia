<?php

/**
 * Archivo para la migración de la tabla selects
 *
 * @author Carolina Tarapues <carotarapues@gmail.com>
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';
            
            $table->id();
            $table->foreignId('campo_id')->constrained();
            $table->foreignId('dominio_id')->constrained();
            $table->softDeletes('deleted_at', 0);

            $table->unique(['campo_id', 'dominio_id']);
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
        Schema::dropIfExists('listas');
        Schema::enableForeignKeyConstraints();
    }
}
