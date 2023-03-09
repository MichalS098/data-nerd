<?php

namespace App\Http\Controllers;

use App\Models\Diagram;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DiagramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        return Inertia::render('Diagrams/Index', [
            'diagrams' => Diagram::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagram $diagram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagram $diagram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diagram $diagram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagram $diagram)
    {
        //
    }
}
