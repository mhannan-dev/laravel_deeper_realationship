<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class EmployeeSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Faker $faker)
	{
		for ($i = 0; $i < 500; $i++) {
			DB::table('employees')->insert([
				'country_id' => 18,
				'city_id' => 1,
				'shop_id' => 1,
				'empployee_name' => $faker->name
			]);
		}
	}
}
