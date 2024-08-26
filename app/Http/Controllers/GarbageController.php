<?php

namespace App\Http\Controllers;

use App\Models\Garbage;
use Illuminate\Http\Request;

class GarbageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $garbages = Garbage::all(); // ดึงข้อมูลทั้งหมดจากฐานข้อมูล
        return view('garbages.index', compact('garbages')); // ส่งข้อมูลไปยัง view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('garbages.create'); // แสดงฟอร์มสร้างข้อมูลขยะใหม่
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ตรวจสอบข้อมูลที่ได้รับจากฟอร์ม
        $validated = $request->validate([
            'loc_name' => 'required|string|max:255',
            'disp_method' => 'required|string|max:255',
            'date' => 'required|date',
            'waste_amt' => 'required|numeric|min:0',
            'addr' => 'required|string|max:255',
            'caretaker' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // สร้างข้อมูลขยะใหม่
        Garbage::create($validated);

        return redirect()->route('garbages.index')->with('success', 'ข้อมูลขยะถูกบันทึกเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     */
    public function show(Garbage $garbage)
    {
        return view('garbages.show', compact('garbage')); // แสดงรายละเอียดของข้อมูลขยะ
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Garbage $garbage)
    {
        return view('garbages.edit', compact('garbage')); // แสดงฟอร์มแก้ไขข้อมูลขยะ
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Garbage $garbage)
    {
        // ตรวจสอบข้อมูลที่ได้รับจากฟอร์ม
        $validated = $request->validate([
            'loc_name' => 'required|string|max:255',
            'disp_method' => 'required|string|max:255',
            'date' => 'required|date',
            'waste_amt' => 'required|numeric|min:0',
            'addr' => 'required|string|max:255',
            'caretaker' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // อัปเดตข้อมูลขยะ
        $garbage->update($validated);

        return redirect()->route('garbages.index')->with('success', 'ข้อมูลขยะถูกอัปเดตเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Garbage $garbage)
    {
        $garbage->delete(); // ลบข้อมูลขยะ
        return redirect()->route('garbages.index')->with('success', 'ข้อมูลขยะถูกลบเรียบร้อยแล้ว');
    }
}
