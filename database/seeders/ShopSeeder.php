<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Faker $faker)
	{
		for ($i = 0; $i < 50; $i++) {
			DB::table('shops')->insert([
				'country_id' => 18,
				'city_id' => 2,
				'shop_name' => $faker->name
			]);
		}
	}
}
