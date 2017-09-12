<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::Table('users')->insert([
    		[
    		'name'=>'Geovanny Juarez',
    		'email'=>'geovanny.juarez@outlook.com',
    		'password'=>bcrypt('geo.juarez')
    		],
    		[
    		'name'=>'Vanny',
    		'email'=>'g.juarez94@gmail.com',
    		'password'=>bcrypt('geo.juarez')
    		]
    		]);
    }
}
