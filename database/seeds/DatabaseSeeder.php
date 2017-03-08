<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(userSeeder::class);
        /*DB::table('users')->insert([
        	'name'=>'phu',
        	'email'=>'phubui@gmail.com',
        	'password'=>bcrypt('matkhau'),

        	]);
        	*/
    }
}
//Tao mot class moi ke thua tu class Seeder
class userSeeder extends Seeder{
	public function run()
	{
	DB::table('users')->insert([
		['name'=>'admin','email'=>'ngan@gmail.com','password'=>bcrypt('matkhau')],
		['name'=>'admin1','email'=>'ducanh@gmail.com','password'=>bcrypt('matkhau')],
        ['name'=>'admin2','email'=>'ducanh2@gmail.com','password'=>bcrypt('matkhau')],
		['name'=>'admin3','email'=>'ducanh2@gmail.com','password'=>bcrypt('admin')],

		]
		);
	}
}
