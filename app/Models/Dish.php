<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Dish extends Model
{
    use HasFactory;

    public function restaurant() :BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    // public function category() :BelongsToMany 
    // {
    //     return $this->belongsToMany(Category::class);
    // }

    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
