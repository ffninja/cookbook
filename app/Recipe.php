<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * Get recipe ingrredients
     */
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->withTimestamps();
    }
}
