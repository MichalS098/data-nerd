<?php

namespace App\Models\Diagrams;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'diagram_id',        
    ];

    public function diagram()
    {
        return $this->belongsTo(Diagram::class);
    }

    public function fields()
    {
        return $this->hasMany(EntityField::class);
    }
}
