<?php

use Illuminate\Database\Seeder;

class Category_Product_Pivot_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       			// DB::table('products')->truncate();
		$faker = \Faker\Factory::create();
		foreach(App\Product::all() as $product)
		{
			foreach(App\Category::all() as $category){
				if(rand(1,25)) {
					$product->categories()->attach($category->id);
				}
			}
			$product->save();
		}
    }
}
