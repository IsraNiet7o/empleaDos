<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->string('company_name',100);
            $table->string('razon_social',150);
            $table->string('rfc',100);
            $table->string('giro_company',100);
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('calle', 150);
            $table->string('no_ext', 20);
            $table->string('no_int', 20)->nullable();
            $table->string('colonia');
            $table->string('codigo_postal', 100);
            $table->string('tipo_tel1',50);
            $table->string('telefono1',50);
            $table->string('tipo_tel2',50);
            $table->string('telefono2',50);
            $table->string('fax',100);
            $table->string('logo',150);
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
        Schema::drop('company_datas');
    }
}
