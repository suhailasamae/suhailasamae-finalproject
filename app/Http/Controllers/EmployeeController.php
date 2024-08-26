<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; // เพิ่มการใช้ Employee model
use App\Models\Vehicle;  // เพิ่มการใช้ Vehicle model

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all(); // ดึงข้อมูลทั้งหมดของบุคลากร
        return view('employees.index', compact('employees')); // ส่งข้อมูลไปยัง view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicles = Vehicle::all(); // ดึงข้อมูลทั้งหมดของรถเพื่อใช้ใน dropdown
        return view('employees.create', compact('vehicles')); // ส่งข้อมูลไปยัง view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'per_name' => 'required|string|max:255',
            'veh_license' => 'required|exists:vehicles,license',
            'phone' => 'required|string|max:15',
        ]);

        Employee::create([
            'per_name' => $request->input('per_name'),
            'veh_license' => $request->input('veh_license'),
            'phone' => $request->input('phone'),
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id); // ค้นหาบุคลากรตาม ID
        return view('employees.show', compact('employee')); // ส่งข้อมูลไปยัง view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id); // ค้นหาบุคลากรตาม ID
        $vehicles = Vehicle::all(); // ดึงข้อมูลทั้งหมดของรถเพื่อใช้ใน dropdown
        return view('employees.edit', compact('employee', 'vehicles')); // ส่งข้อมูลไปยัง view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'per_name' => 'required|string|max:255',
            'veh_license' => 'required|exists:vehicles,license',
            'phone' => 'required|string|max:15',
        ]);

        $employee = Employee::findOrFail($id); // ค้นหาบุคลากรตาม ID
        $employee->update([
            'per_name' => $request->input('per_name'),
            'veh_license' => $request->input('veh_license'),
            'phone' => $request->input('phone'),
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id); // ค้นหาบุคลากรตาม ID
        $employee->delete(); // ลบบุคลากร

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
