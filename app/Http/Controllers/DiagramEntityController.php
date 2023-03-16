<?php

namespace App\Http\Controllers;

use App\Models\Diagram;
use Illuminate\Http\Request;

class DiagramEntityController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Diagram $diagram, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $diagram->entities()->create([
            'name' => $request->name,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}