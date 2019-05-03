<?php

use App\User;
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
    	DB::table('users')->truncate();
    	$faker = \Faker\Factory::create();
    	foreach(range(1,50) as $index)
    	{
    		User::create([
    			'name' => $faker->userName,
    			'email' => $faker->email,
    			'password' => bcrypt('secret'),
    			'p_id'=> $index,
    			'p_name'=>$faker->streetName,
    			// $table->bigIncrements('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password'); 
    		]);
    	}
    }
}
