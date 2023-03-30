<?php

namespace App\Models\Diagrams;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityField extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'entity_id',
    ];

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }
}
