<?php

use Illuminate\Database\Seeder;

class TipoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_users')->insert([
        	'tipo_user'	=> 'company' 
        	]);
    }
}
