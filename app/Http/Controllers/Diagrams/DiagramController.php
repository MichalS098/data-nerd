<?php

declare(strict_types=1);

namespace App\Http\Controllers\Diagrams;

use App\Http\Requests\Diagrams\DiagramPostRequest;
use App\Models\Diagrams\Diagram;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class DiagramController
{
    public function index(Request $request): Response
    {
        return Inertia::render(
            component: 'Diagrams/Index',
            props: [
                'diagrams' => $request->user()->diagrams()->paginate(),
            ]
        );
    }

    public function store(DiagramPostRequest $request): RedirectResponse
    {
        Diagram::create($request->validated());

        return redirect()->route('diagrams.index')->with('success', 'Diagram created.');
    }

    public function show(Diagram $diagram): Response
    {
        if ($diagram->user_id !== auth()->id()) {
            abort(403);
        }

        return Inertia::render(
            component: 'Diagrams/Show',
            props: [
                'diagram' => $diagram->load('entities.fields'),
            ]
        );
    }

    public function destroy(Diagram $diagram): RedirectResponse
    {
        if ($diagram->user_id !== auth()->id()) {
            abort(403);
        }

        $diagram->delete();

        return redirect()->route('diagrams.index')->with('success', 'Diagram deleted.');
    }
}
