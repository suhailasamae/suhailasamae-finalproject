@extends('layouts.app')
  
@section('title')
    รายละเอียดรถเก็บขยะ
@endsection
  
@section('contents')
    <h1 class="mb-0">รายละเอียดรถเก็บขยะ</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ประเภทของรถ</label>
            <input type="text" name="veh_type" class="form-control" value="{{ $vehicle->veh_type }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">ทะเบียนรถ</label>
            <input type="text" name="license" class="form-control" value="{{ $vehicle->license }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">วันที่บำรุงรักษา</label>
            <input type="text" name="last_service" class="form-control" value="{{ $vehicle->last_service->format('d/m/Y') }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">สถานะรถ</label>
            <input type="text" name="status" class="form-control" value="{{ $vehicle->status }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">สร้างเมื่อ</label>
            <input type="text" name="created_at" class="form-control" value="{{ $vehicle->created_at->format('d/m/Y H:i') }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">แก้ไขเมื่อ</label>
            <input type="text" name="updated_at" class="form-control" value="{{ $vehicle->updated_at->format('d/m/Y H:i') }}" readonly>
        </div>
    </div>
@endsection
