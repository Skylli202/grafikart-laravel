<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperRealEstate
 */
class RealEstate extends Model
{
	use HasFactory;

	protected $fillable = [
		'title',
		'surface',
		'price',
		'description',
		'rooms',
		'bedrooms',
		'floor',
		'address',
		'city',
		'zipcode',
	];

	public function options(): BelongsToMany
	{
		return $this->belongsToMany(
			RealEstate::class,
			'option_real_estate',
			'option_id',
			'real_estate_id'
		);
	}
}
