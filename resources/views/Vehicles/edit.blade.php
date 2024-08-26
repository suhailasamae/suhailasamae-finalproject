@extends('layouts.app')

  
@section('contents')
    <h1 class="mb-0">แก้ไขข้อมูลรถเก็บขยะ</h1>
    <hr />
    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label for="veh_type" class="form-label">ประเภทของรถ</label>
                <select name="veh_type" class="form-control" id="veh_type" required>
                    <option value="">เลือกประเภทของรถ</option>
                    <option value="ContainerTruck" {{ $vehicle->veh_type == 'ContainerTruck' ? 'selected' : '' }}>รถบรรทุกขยะแบบคอนเทนเนอร์</option>
                    <option value="CompactorTruck" {{ $vehicle->veh_type == 'CompactorTruck"' ? 'selected' : '' }}>รถบรรทุกขยะแบบอัดท้าย</option>
                    <!-- Add other options as needed -->
                </select>
            </div>
            <div class="col mb-3">
                <label for="license" class="form-label">ทะเบียนรถ</label>
                <input type="text" name="license" class="form-control" id="license" placeholder="กรอกทะเบียนรถ" value="{{ $vehicle->license }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="last_service" class="form-label">วันที่บำรุงรักษา</label>
                <input type="date" name="last_service" class="form-control" id="last_service" placeholder="กรอกวันที่บำรุงรักษา" value="{{ $vehicle->last_service->format('Y-m-d') }}" required>
            </div>
            <div class="col mb-3">
                <label for="status" class="form-label">สถานะรถ</label>
                <select name="status" class="form-control" id="status" required>
                    <option value="">เลือกสถานะรถ</option>
                    <option value="Active" {{ $vehicle->status == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ $vehicle->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    <!-- Add other options as needed -->
                </select>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">อัปเดต</button>
            </div>
        </div>
    </form>
@endsection
