@extends('layouts.app')

@section('contents')
    <h1 class="mb-0">รายละเอียดพนักงาน</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ชื่อพนักงาน</label>
            <input type="text" name="per_name" class="form-control" value="{{ $employee->per_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">ทะเบียนรถ</label>
            <input type="text" name="veh_license" class="form-control" value="{{ $employee->veh_license }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">หมายเลขโทรศัพท์</label>
            <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">สร้างเมื่อ</label>
            <input type="text" name="created_at" class="form-control" value="{{ $employee->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">แก้ไขเมื่อ</label>
            <input type="text" name="updated_at" class="form-control" value="{{ $employee->updated_at }}" readonly>
        </div>
    </div>
@endsection
