<?php

namespace App\Models\Diagrams;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Diagram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'width',
        'height',
        'zoom',
        'x',
        'y',
        'show_grid'
    ];

    public function entities(): HasMany
    {
        return $this->hasMany(Entity::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
