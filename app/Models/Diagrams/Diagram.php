<?php

namespace App\Models\Diagrams;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Diagram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'user_id',
    ];

    public function entities()
    {
        return $this->hasMany(Entity::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
