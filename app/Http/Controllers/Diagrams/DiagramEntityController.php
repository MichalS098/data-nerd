<?php

namespace App\Http\Controllers\Diagrams;

use App\Models\Diagrams\Diagram;
use Illuminate\Http\Request;

final class DiagramEntityController
{
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
