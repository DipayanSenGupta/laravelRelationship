<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('employees')->truncate();
		$faker = \Faker\Factory::create();
		foreach(range(1,50) as $index)
		{
		Employee::create([
		'employee_name'=>$faker->name,	
		'spouse_local_id'=>$index,
		'amount'=> rand(10,1000),
		]);
		}
    }
}
