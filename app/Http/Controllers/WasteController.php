<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waste;
use App\Models\Village;

class WasteController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลขยะทั้งหมดพร้อมกับข้อมูลหมู่บ้านที่เกี่ยวข้อง
        $wastes = Waste::with('village')->orderBy('created_at', 'DESC')->get();
        return view('wastes.index', compact('wastes'));
    }

    public function create()
    {
        // ดึงข้อมูลหมู่บ้านทั้งหมดเพื่อใช้ในฟอร์มสร้างข้อมูล
        $villages = Village::all();
        return view('wastes.create', compact('villages'));
    }

    // store method
    public function store(Request $request)
    {
        // ตรวจสอบข้อมูลที่ส่งมา
        $validated = $request->validate([
            'village_id' => 'required|integer|exists:villages,village_id',
            'date' => 'required|date',
            'total_waste' => 'required|numeric',
            'gen_waste' => 'required|numeric',
            'org_waste' => 'required|numeric',
            'rec_waste' => 'required|numeric',
            'haz_waste' => 'required|numeric',
            'inf_waste' => 'required|numeric',
            'ind_waste' => 'required|numeric',
            'e_waste' => 'required|numeric',
        ]);

        // สร้างข้อมูลขยะใหม่
        Waste::create($validated);

        // เปลี่ยนเส้นทางไปยังหน้ารายการขยะพร้อมข้อความสำเร็จ
        return redirect()->route('wastes.index')->with('success', 'ข้อมูลขยะถูกเพิ่มเรียบร้อยแล้ว');
    }

    public function show($id)
    {
        // ดึงข้อมูลขยะที่มีรหัสที่ตรงกับ id และข้อมูลหมู่บ้านที่เกี่ยวข้อง
        $waste = Waste::with('village')->findOrFail($id);
        return view('wastes.show', compact('waste'));
    }

    public function edit($id)
    {
        $waste = Waste::findOrFail($id);
        $villages = Village::all();
        return view('wastes.edit', compact('waste', 'villages'));
    }



    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'village_id' => 'required|integer|exists:villages,village_id',
            'date' => 'required|date',
            'total_waste' => 'required|numeric',
            'gen_waste' => 'required|numeric',
            'org_waste' => 'required|numeric',
            'rec_waste' => 'required|numeric',
            'haz_waste' => 'required|numeric',
            'inf_waste' => 'required|numeric',
            'ind_waste' => 'required|numeric',
            'e_waste' => 'required|numeric',
        ]);

        // หาและอัพเดตข้อมูลขยะ
        $waste = Waste::findOrFail($id);
        $waste->update($validated);

        // เปลี่ยนเส้นทางไปยังหน้ารายการขยะพร้อมข้อความสำเร็จ
        return redirect()->route('wastes.index')->with('success', 'ข้อมูลขยะถูกอัพเดตเรียบร้อยแล้ว');
    }

    public function destroy($id)
    {
        // หาและลบข้อมูลขยะ
        $waste = Waste::findOrFail($id);
        $waste->delete();

        // เปลี่ยนเส้นทางไปยังหน้ารายการขยะพร้อมข้อความสำเร็จ
        return redirect()->route('wastes.index')->with('success', 'ข้อมูลขยะถูกลบเรียบร้อยแล้ว');
    }
}
