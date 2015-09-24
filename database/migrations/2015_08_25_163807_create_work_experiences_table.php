<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->string('empresa',100);
            $table->string('puesto', 100);
            $table->string('giro_empresa', 100);
            $table->string('mes_inicio', 20);
            $table->string('anio_inicio', 4);
            $table->string('mes_termino', 20);
            $table->string('anio_termino', 4);
            $table->string('referencia_nombre');
            $table->string('referencia_puesto');
            $table->string('referencia_email');
            $table->string('referencia_telefono');
            $table->text('descripcion_activi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('work_experiences');
    }
}
