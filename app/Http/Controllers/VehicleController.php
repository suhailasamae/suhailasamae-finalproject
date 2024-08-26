<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all vehicles and pass them to the view
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show the form to create a new vehicle
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'veh_type' => 'required|string|max:100',
            'license' => 'required|string|max:50',
            'last_service' => 'required|date',
            'status' => 'required|string|max:20',
        ]);

        // Create a new vehicle
        Vehicle::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the vehicle by its ID
        $vehicle = Vehicle::findOrFail($id);

        // Show the vehicle details
        return view('vehicles.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the vehicle by its ID
        $vehicle = Vehicle::findOrFail($id);

        // Show the form to edit the vehicle
        return view('vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'veh_type' => 'required|string|max:100',
            'license' => 'required|string|max:50',
            'last_service' => 'required|date',
            'status' => 'required|string|max:20',
        ]);

        // Find the vehicle by its ID
        $vehicle = Vehicle::findOrFail($id);

        // Update the vehicle with the request data
        $vehicle->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the vehicle by its ID
        $vehicle = Vehicle::findOrFail($id);

        // Delete the vehicle
        $vehicle->delete();

        // Redirect to the index page with a success message
        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
    }
}
