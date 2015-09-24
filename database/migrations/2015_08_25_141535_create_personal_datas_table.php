<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->string('name');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('estado_civil');
            $table->string('rfc');
            $table->string('curp');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('city');
            $table->string('calle');
            $table->string('no_ext');
            $table->string('no_int')->nullable();
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('tipo_tel1');
            $table->string('telefono1');
            $table->string('tipo_tel2');
            $table->string('telefono2');
            $table->boolean('licencia');
            $table->string('tipo_licencia')->nullable();
            $table->boolean('dipone_veiculo');
            $table->boolean('discapacidad');
            $table->string('img_user');
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
        Schema::drop('personal_datas');
    }
}
