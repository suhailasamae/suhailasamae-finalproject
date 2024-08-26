@extends('layouts.app')

@section('contents')
    <h1 class="mb-0">รายละเอียดข้อมูลการเก็บขยะ</h1>
    <hr />
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">หมู่บ้าน</label>
            <input type="text" class="form-control" value="{{ $waste->village->village_name ?? 'ไม่ระบุ' }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">วันที่เก็บขยะ</label>
            <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($waste->date)->format('d/m/Y') }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">ปริมาณขยะทั้งหมด</label>
            <input type="text" class="form-control" value="{{ number_format($waste->total_waste, 2) }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">ขยะทั่วไป</label>
            <input type="text" class="form-control" value="{{ number_format($waste->gen_waste, 2) }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">ขยะอินทรีย์</label>
            <input type="text" class="form-control" value="{{ number_format($waste->org_waste, 2) }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">ขยะรีไซเคิล</label>
            <input type="text" class="form-control" value="{{ number_format($waste->rec_waste, 2) }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">ขยะอันตราย</label>
            <input type="text" class="form-control" value="{{ number_format($waste->haz_waste, 2) }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">ขยะติดเชื้อ</label>
            <input type="text" class="form-control" value="{{ number_format($waste->inf_waste, 2) }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">กากอุตสาหกรรม</label>
            <input type="text" class="form-control" value="{{ number_format($waste->ind_waste, 2) }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">ขยะอิเล็คทรอนิค</label>
            <input type="text" class="form-control" value="{{ number_format($waste->e_waste, 2) }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">สร้างเมื่อ</label>
            <input type="text" class="form-control" value="{{ $waste->created_at->format('d/m/Y H:i:s') }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">แก้ไขเมื่อ</label>
            <input type="text" class="form-control" value="{{ $waste->updated_at->format('d/m/Y H:i:s') }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <a href="{{ route('wastes.index') }}" class="btn btn-secondary">กลับไปยังรายการขยะ</a>
        </div>
    </div>
@endsection
