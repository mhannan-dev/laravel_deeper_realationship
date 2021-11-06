<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	use HasFactory;
	/**
	 * Get all of the comments for the Country
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function cities()
	{
		return $this->hasMany(City::class);
	}
	/**
	 * Get all of the comments for the Country
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
	 */
	public function shop()
	{
		return $this->hasMany(Shop::class);
	}
	/**
	 * Get all of the comments for the Country
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
	 */
	public function shops()
	{
		return $this->hasManyThrough(Shop::class, City::class);
	}
}
