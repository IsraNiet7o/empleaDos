<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactComaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_comanies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->integer('company_data_id')->unsigned();
            $table->foreign('company_data_id')->references('id')->on('company_datas');
            $table->string('name_contact', 100);
            $table->string('cargo', 150);
            $table->string('email', 150);
            $table->string('type_fone1', 100);
            $table->string('fone1', 100);
            $table->string('type_fone2', 100);
            $table->string('fone12', 100);
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
        Schema::drop('contact_comanies');
    }
}
