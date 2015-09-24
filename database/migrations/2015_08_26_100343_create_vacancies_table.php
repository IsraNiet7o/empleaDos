<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->integer('company_data_id')->unsigned();
            $table->foreign('company_data_id')->references('id')->on('company_datas');
            $table->string('title', 200);
            $table->string('specialty', 200);
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->integer('subcategoria_id')->unsigned();
            $table->foreign('subcategoria_id')->references('id')->on('supcategorias');
            $table->text('description');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('type_contract');
            $table->string('cantidad_vacancy',4);
            $table->boolean('publicar_sueldo');
            $table->integer('sueldo_min');
            $table->integer('sueldo_max');
            $table->boolean('viajar');
            $table->boolean('cambio_residencia');
            $table->text('comment_final');
            $table->boolean('activada');
            $table->date('date_expira');
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
        Schema::drop('vacancies');
    }
}
