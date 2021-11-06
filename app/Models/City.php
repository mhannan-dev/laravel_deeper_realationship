<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	use HasFactory;
	/**
	 * Get all of the shops f
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
	 */
	public function shops()
	{
		return $this->hasMany(Shop::class);
	}
	public function employees()
	{
		return $this->hasManyThrough(Employee::class, Shop::class);
	}
	/**
	 * Get the user that owns the City
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function country()
	{
			return $this->belongsTo(Country::class);
	}


}
