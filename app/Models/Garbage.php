<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garbage extends Model
{
    use HasFactory;

    protected $fillable = [
        'loc_name',        // ชื่อสถานที่
        'disp_method',     // วิธีการกำจัด
        'date',            // วันที่กำจัด
        'waste_amt',       // ปริมาณขยะ
        'addr',            // ที่อยู่
        'caretaker',       // ผู้ดูแล
        'phone'            // เบอร์โทร
    ];

}
