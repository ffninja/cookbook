<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    /**
     * Get ingredient recipies
     */
    public function recipies()
    {
        return $this->belongsToMany(Recipe::class)->withTimestamps();
    }

    /**
     * Get ingredient measure
     */
    public function measure()
    {
        return $this->hasOne(Measure::class);
    }
}
