<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Employee; // Assuming you have an Employee model for the dropdown

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::all(); // Retrieve all expenses
        return view('expenses.index', compact('expenses')); // Pass expenses to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all(); // Retrieve employees for the dropdown
        return view('expenses.create', compact('employees')); // Pass employees to the view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'per_id' => 'required|exists:employees,id',
            'exp_type' => 'required|string',
            'amount' => 'required|numeric',
            'exp_date' => 'required|date',
            'pay_method' => 'required|string',
            'desc' => 'nullable|string',
        ]);

        // Create and save the expense
        Expense::create($validated);

        return redirect()->route('expenses.index')->with('success', 'Expense created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $expense = Expense::findOrFail($id); // Retrieve specific expense
        return view('expenses.show', compact('expense')); // Pass expense to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $expense = Expense::findOrFail($id); // Retrieve specific expense
        $employees = Employee::all(); // Retrieve employees for the dropdown
        return view('expenses.edit', compact('expense', 'employees')); // Pass data to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'per_id' => 'required|exists:employees,id',
            'exp_type' => 'required|string',
            'amount' => 'required|numeric',
            'exp_date' => 'required|date',
            'pay_method' => 'required|string',
            'desc' => 'nullable|string',
        ]);

        // Find the expense and update it
        $expense = Expense::findOrFail($id);
        $expense->update($validated);

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expense = Expense::findOrFail($id); // Retrieve specific expense
        $expense->delete(); // Delete the expense

        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }
}
