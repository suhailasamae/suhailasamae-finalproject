@extends('layouts.app')

@section('contents')
<h1 class="mb-0">เพิ่มข้อมูลขยะ</h1>
<hr />
<form action="{{ route('wastes.store') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <label for="village_id" class="form-label">หมู่บ้าน</label>
            <select name="village_id" class="form-control" required>
                <option value="">เลือกหมู่บ้าน</option>
                @foreach($villages as $village)
                <option value="{{ $village->village_id }}" {{ old('village_id') == $village->village_id ? 'selected' : '' }}>
                    {{ $village->village_name }}
                </option>
                @endforeach
            </select>
            @error('village_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="date" class="form-label">วันที่เก็บขยะ</label>
            <input type="date" name="date" class="form-control" id="date" placeholder="เลือกวันที่เก็บขยะ" required>
            @error('date')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label for="total_waste" class="form-label">ปริมาณขยะทั้งหมด</label>
            <input type="number" step="0.01" name="total_waste" class="form-control" id="total_waste" placeholder="กรอกปริมาณขยะทั้งหมด" required>
            @error('total_waste')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="gen_waste" class="form-label">ขยะทั่วไป</label>
            <input type="number" step="0.01" name="gen_waste" class="form-control" id="gen_waste" placeholder="กรอกขยะทั่วไป" required>
            @error('gen_waste')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label for="org_waste" class="form-label">ขยะอินทรีย์</label>
            <input type="number" step="0.01" name="org_waste" class="form-control" id="org_waste" placeholder="กรอกขยะอินทรีย์" required>
            @error('org_waste')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="rec_waste" class="form-label">ขยะรีไซเคิล</label>
            <input type="number" step="0.01" name="rec_waste" class="form-control" id="rec_waste" placeholder="กรอกขยะรีไซเคิล" required>
            @error('rec_waste')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label for="haz_waste" class="form-label">ขยะอันตราย</label>
            <input type="number" step="0.01" name="haz_waste" class="form-control" id="haz_waste" placeholder="กรอกขยะอันตราย" required>
            @error('haz_waste')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="inf_waste" class="form-label">ขยะติดเชื้อ</label>
            <input type="number" step="0.01" name="inf_waste" class="form-control" id="inf_waste" placeholder="กรอกขยะติดเชื้อ" required>
            @error('inf_waste')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label for="ind_waste" class="form-label">กากอุตสาหกรรม</label>
            <input type="number" step="0.01" name="ind_waste" class="form-control" id="ind_waste" placeholder="กรอกกากอุตสาหกรรม" required>
            @error('ind_waste')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="e_waste" class="form-label">ขยะอิเล็คทรอนิค</label>
            <input type="number" step="0.01" name="e_waste" class="form-control" id="e_waste" placeholder="กรอกขยะอิเล็คทรอนิค" required>
            @error('e_waste')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
    </div>
</form>
@endsection
