<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Specify the table fields
    protected $fillable = [
        'per_name',
        'veh_license',
        'phone',
    ];

    // Optionally, if you want to specify the primary key field explicitly
    protected $primaryKey = 'id';

    // Define the relationship to the vehicle (assuming you have a Vehicle model)
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'veh_license', 'license');
    }
}
