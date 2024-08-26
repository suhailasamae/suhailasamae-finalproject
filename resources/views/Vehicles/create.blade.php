@extends('layouts.app')

@section('contents')
<h1 class="mb-0">เพิ่มรถเก็บขยะ</h1>
<hr />
<form action="{{ route('vehicles.store') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <label for="veh_type" class="form-label">ประเภทของรถ</label>
            <select name="veh_type" class="form-control" id="veh_type" required>
                <option value="">เลือกประเภทของรถ</option>
                <option value="ContainerTruck">รถบรรทุกขยะแบบคอนเทนเนอร์<option>
                <option value="CompactorTruck">รถบรรทุกขยะแบบอัดท้าย</option>

                <!-- Add other options as needed -->
            </select>
        </div>
        <div class="col">
            <label for="license" class="form-label">ทะเบียนรถ</label>
            <input type="text" name="license" class="form-control" id="license" placeholder="กรอกทะเบียนรถ" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="last_service" class="form-label">วันที่บำรุงรักษา</label>
            <input type="date" name="last_service" class="form-control" id="last_service" placeholder="กรอกวันที่บำรุงรักษา" required>
        </div>
        <div class="col">
            <label for="status" class="form-label">สถานะรถ</label>
            <select name="status" class="form-control" id="status" required>
                <option value="">เลือกสถานะรถ</option>
                <option value="Active">เปิดใช้งาน</option>
                <option value="Inactive">ปิดใช้งาน</option>

                <!-- Add other options as needed -->
            </select>
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
    </div>
</form>
@endsection