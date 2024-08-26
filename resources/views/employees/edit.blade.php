@extends('layouts.app')


@section('contents')
    <h1 class="mb-0">แก้ไขข้อมูลพนักกงาน</h1>
    <hr />
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ชื่อพนักงาน</label>
                <input type="text" name="per_name" class="form-control" placeholder="ชื่อคนงาน" value="{{ $employee->per_name }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">ทะเบียนรถ</label>
                <select name="veh_license" class="form-control" required>
                    @foreach($vehicles as $vehicle)
                        <option value="{{ $vehicle->license }}" {{ $vehicle->license == $employee->veh_license ? 'selected' : '' }}>
                            {{ $vehicle->license }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">หมายเลขโทรศัพท์</label>
                <input type="text" name="phone" class="form-control" placeholder="หมายเลขโทรศัพท์" value="{{ $employee->phone }}" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
