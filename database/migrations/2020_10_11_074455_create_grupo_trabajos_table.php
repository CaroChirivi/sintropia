<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_trabajos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';
            
            $table->id();
            $table->foreignId('tipo_documento')->constrained('listas');
            $table->string('numero_documento', 20);
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('celular1', 30); 
            $table->string('celular2', 30)->nullable(); 
            $table->string('email', 50)->unique();
            $table->softDeletes();
            $table->boolean('habilitado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_trabajos');
    }
}
