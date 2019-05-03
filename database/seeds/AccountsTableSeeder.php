<?php

use App\Account;
use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('accounts')->truncate();
    	$faker = \Faker\Factory::create();
    	foreach(range(1,50) as $index)
    	{
    		Account::create([
    			'user_id' => $index,
    			'account_number'=> rand(100000000,999999999),
    			'parent_id' => $index,
    		]);
    	}
    }
}
