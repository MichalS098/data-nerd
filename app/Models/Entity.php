<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'diagram_id',
    ];

    public function diagram()
    {
        return $this->belongsTo(Diagram::class);
    }
    
    public function relations()
    {
        return $this->hasMany(Relation::class);
    }
}
