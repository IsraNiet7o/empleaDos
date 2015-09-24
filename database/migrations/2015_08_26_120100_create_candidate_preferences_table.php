<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->string('situacion_actual',150);
            $table->string('puesto_deseado',150);
            $table->string('area',120);
            $table->boolean('viaje');
            $table->boolean('cambio_residen');
            $table->integer('sueldo_requerido');
            $table->string('tipo_moneda1',120);
            $table->string('periodo1',120);
            $table->integer('sueldo_deseado');
            $table->string('tipo_moneda2',120);
            $table->string('periodo2',120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('candidate_preferences');
    }
}
