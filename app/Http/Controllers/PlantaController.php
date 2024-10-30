<?php

namespace App\Http\Controllers;
use App\Models\Planta;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plantas = Planta::all();
        return view('plantas.index', compact('plantas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plantas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'altura' => 'required',
            'tipo' => 'required',
            'riego' => 'required',
        ]);

        Planta::create($request->all());
        return redirect()->route('plantas.index')->with('success', 'Planta creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('plantas.show', compact('planta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('plantas.edit', compact('planta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'altura' => 'required',
            'tipo' => 'required',
            'riego' => 'required',
        ]);

        $planta->update($request->all());
        return redirect()->route('plantas.index')->with('success', 'Planta actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $planta->delete();
        return redirect()->route('plantas.index')->with('success', 'Planta eliminada con éxito.');
    }
}
