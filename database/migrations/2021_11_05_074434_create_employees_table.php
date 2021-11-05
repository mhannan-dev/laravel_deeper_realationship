<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function (Blueprint $table) {
			$table->id();
			//$table->foreignId('country_id')->constrained()->comment('PK on Country');
			$table->unsignedInteger('country_id')->nullable();
			$table->unsignedInteger('city_id')->nullable();
			$table->unsignedInteger('shop_id')->nullable();
			$table->string('empployee_name')->unique();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('employees');
	}
}
