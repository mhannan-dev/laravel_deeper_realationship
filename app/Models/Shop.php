<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	use HasFactory;
	/**
	 * Get all of the comments for the Shop
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
	 */
	public function employees()
	{
		return $this->hasMany(Employee::class);
	}
	/**
	 * Get the user that owns the Shop
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function city()
	{
		return $this->belongsTo(City::class);
	}
	public function country()
	{
		return $this->belongsTo(Country::class);
	}
}
