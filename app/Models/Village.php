<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'villages';

    // Define the primary key if it's not the default 'id'
    protected $primaryKey = 'village_id';

    // Define whether the primary key is auto-incrementing
    public $incrementing = true;

    // Define the type of the primary key
    protected $keyType = 'int'; // Assuming 'village_id' is an integer

    // Define the fillable fields
    protected $fillable = [
        'village_name',
        'pop',
        'hh_count',
    ];

    // Define the dates to be treated as Carbon instances
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Define the relationship with the Waste model
    public function wastes()
    {
        return $this->hasMany(Waste::class, 'village_id');
    }
}
