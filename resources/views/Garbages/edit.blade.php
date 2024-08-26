@extends('layouts.app')

@section('contents')
    <h1 class="mb-0">แก้ไขข้อมูลการกำจัดขยะ</h1>
    <hr />
    <form action="{{ route('garbages.update', $garbage->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label for="loc_name" class="form-label">ชื่อสถานที่</label>
                <input type="text" name="loc_name" class="form-control" id="loc_name" placeholder="กรอกชื่อสถานที่" value="{{ old('loc_name', $garbage->loc_name) }}" required>
                @error('loc_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="disp_method" class="form-label">วิธีการกำจัด</label>
                <input type="text" name="disp_method" class="form-control" id="disp_method" placeholder="กรอกวิธีการกำจัด" value="{{ old('disp_method', $garbage->disp_method) }}" required>
                @error('disp_method')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="date" class="form-label">วันที่กำจัด</label>
                <input type="date" name="date" class="form-control" id="date" value="{{ old('date', $garbage->date) }}" required>
                @error('date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="waste_amt" class="form-label">ปริมาณขยะ</label>
                <input type="number" step="0.01" name="waste_amt" class="form-control" id="waste_amt" placeholder="กรอกปริมาณขยะ" value="{{ old('waste_amt', $garbage->waste_amt) }}" required>
                @error('waste_amt')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="addr" class="form-label">ที่อยู่</label>
                <input type="text" name="addr" class="form-control" id="addr" placeholder="กรอกที่อยู่" value="{{ old('addr', $garbage->addr) }}" required>
                @error('addr')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="caretaker" class="form-label">ผู้ดูแล</label>
                <input type="text" name="caretaker" class="form-control" id="caretaker" placeholder="กรอกชื่อผู้ดูแล" value="{{ old('caretaker', $garbage->caretaker) }}" required>
                @error('caretaker')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="phone" class="form-label">เบอร์โทร</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="กรอกเบอร์โทร" value="{{ old('phone', $garbage->phone) }}" required>
                @error('phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">อัปเดต</button>
            </div>
        </div>
    </form>
@endsection
