<?php

use Illuminate\Database\Seeder;
use App\Transaction;
class TransactionSeeder extends Seeder
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
		Transaction::create([
		'employee_id' => $index,
		'transaction_amount'=> rand(10,1000),
		]);
		}
    }
}
