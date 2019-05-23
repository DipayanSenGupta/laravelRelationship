<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('products')->truncate();
			$faker = \Faker\Factory::create();
		foreach(range(1,50) as $index)
		{
			Product::create([
			'name'=> $faker->streetName,
			'price' => rand(10,300)
			]);
		}
    }
}
