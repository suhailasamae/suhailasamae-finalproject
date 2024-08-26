<?php

// app/Models/Waste.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Waste extends Model
{
    // กำหนดให้ 'id' เป็น primary key ถ้าใช้ primary key ที่ไม่ใช่ 'id'
    protected $primaryKey = 'id'; // เปลี่ยนถ้าคุณใช้ primary key อื่น

    // กำหนดฟิลด์ที่อนุญาตให้ทำการ mass assignment ได้
    protected $fillable = [
        'village_id',
        'date',
        'total_waste',
        'gen_waste',
        'org_waste',
        'rec_waste',
        'haz_waste',
        'inf_waste',
        'ind_waste',
        'e_waste',
    ];

    // ความสัมพันธ์กับ Village
    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id', 'village_id');
    }
}
