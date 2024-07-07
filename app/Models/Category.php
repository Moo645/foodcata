<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function dishes() :HasMany 
    {
        return $this->hasMany(Dish::class);
    }
    public function restaurants() :BelongsToMany 
    {
        return $this->belongsToMany(Restaurant::class);
    }
}
