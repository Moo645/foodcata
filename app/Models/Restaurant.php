<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'address',
    ];

    public function isOwner($user) :bool
    {
        return $this->user_id === $user->id;
    }
    
    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function dishes() :HasMany
    {
        return $this->hasMany(Dish::class);
    }

    public function categories() :BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
