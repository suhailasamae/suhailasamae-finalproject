<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    // Specify the table fields
    protected $fillable = [
        'veh_type',
        'license',
        'last_service',
        'status',
    ];

    // Optionally, if you want to specify the primary key field explicitly
    protected $primaryKey = 'id';

    // Define the relationship to employees
    public function employees()
    {
        return $this->hasMany(Employee::class, 'veh_license', 'license');
    }
}
