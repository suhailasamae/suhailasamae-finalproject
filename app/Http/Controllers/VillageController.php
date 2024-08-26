<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Village;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villages = Village::orderBy('created_at', 'DESC')->get(); // Get all villages in descending order of creation

        return view('villages.index', compact('villages')); // Return the index view with the list of villages
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('villages.create'); // Return the view to create a new village
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'village_name' => 'required|string|max:255',
            'pop' => 'required|integer',
            'hh_count' => 'required|integer',
        ]);

        Village::create($request->only(['village_name', 'pop', 'hh_count'])); // Create a new village with the provided data

        return redirect()->route('villages.index')->with('success', 'Village added successfully'); // Redirect to index with success message
    }

    /**
     * Display the specified resource.
     */
    public function show(int $village_id)
    {
        $village = Village::findOrFail($village_id); // Find the village by its ID or fail

        return view('villages.show', compact('village')); // Return the show view with the village details
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $village_id)
    {
        $village = Village::findOrFail($village_id); // Find the village by its ID or fail

        return view('villages.edit', compact('village')); // Return the edit view with the village details
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $village_id)
    {
        $request->validate([
            'village_name' => 'required|string|max:255',
            'pop' => 'required|integer',
            'hh_count' => 'required|integer',
        ]);

        $village = Village::findOrFail($village_id); // Find the village by its ID or fail

        $village->update($request->only(['village_name', 'pop', 'hh_count'])); // Update the village with the provided data

        return redirect()->route('villages.index')->with('success', 'Village updated successfully'); // Redirect to index with success message
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $village_id)
    {
        $village = Village::findOrFail($village_id); // Find the village by its ID or fail

        $village->delete(); // Delete the village

        return redirect()->route('villages.index')->with('success', 'Village deleted successfully'); // Redirect to index with success message
    }
}
