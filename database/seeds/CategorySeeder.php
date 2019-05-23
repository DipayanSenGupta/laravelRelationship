<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    				DB::table('categories')->truncate();
			$faker = \Faker\Factory::create();
		foreach(range(1,50) as $index)
		{
			Category::create([
			'title'=> $faker->city
			]);
		}
    }
}
