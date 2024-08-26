<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // Define the table associated with the model (if not following Laravel naming convention)
    protected $table = 'expenses';

    // Specify the primary key field (optional if following Laravel convention)
    protected $primaryKey = 'id';

    // Set the fillable fields for mass assignment
    protected $fillable = [
        'per_id',    // Foreign key referencing the employee ID
        'exp_type',  // Type of expense
        'amount',    // Amount of the expense
        'exp_date',  // Date of the expense
        'pay_method', // Payment method
        'desc',      // Additional details
    ];

    // Define the relationship with the Employee model (assuming you have an Employee model)
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'per_id');
    }
}