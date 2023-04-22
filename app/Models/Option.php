<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperOption
 */
class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function realEstates(): BelongsToMany
    {
        return $this->belongsToMany(
            RealEstate::class,
            'option_real_estate',
            'real_estate_id',
            'option_id'
        );
    }
}
