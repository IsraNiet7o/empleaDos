
<?php  
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('email')->unique();
            // $table->string('password', 60);
            // $table->integer('tipo_user_id')->unsigned();
            // $table->foreign('tipo_user_id')->references('id')->on('tipo_users');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
