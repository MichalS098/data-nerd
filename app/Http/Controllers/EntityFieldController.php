<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntityFieldRequest;
use App\Models\Diagrams\Entity;
use Illuminate\Http\Request;

class EntityFieldController extends Controller
{
    public function store(Entity $entity, EntityFieldRequest $request)
    {
        $entity->fields()->create($request->validated());
    }
}
