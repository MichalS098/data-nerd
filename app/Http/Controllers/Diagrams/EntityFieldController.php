<?php

namespace App\Http\Controllers\Diagrams;

use App\Http\Requests\EntityFieldRequest;
use App\Models\Diagrams\Entity;
use Illuminate\Http\Request;

final class EntityFieldController
{
    public function store(Entity $entity, EntityFieldRequest $request)
    {
        $entity->fields()->create($request->validated());
    }
}
