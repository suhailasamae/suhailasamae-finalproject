@extends('layouts.app')

@section('contents')
    <h1 class="mb-0">เพิ่มพนักงาน</h1>
    <hr />
    <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="per_name" class="form-label">ชื่อพนักงาน</label>
                <input type="text" name="per_name" class="form-control" id="per_name" placeholder="กรอกชื่อคนงาน" required>
            </div>
            <div class="col">
                <label for="veh_license" class="form-label">ทะเบียนรถ</label>
                <select name="veh_license" class="form-control" id="veh_license" required>
                    <!-- Options should be dynamically generated from the database -->
                    @foreach($vehicles as $vehicle)
                        <option value="{{ $vehicle->license }}">{{ $vehicle->license }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="phone" class="form-label">หมายเลขโทรศัพท์</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="กรอกหมายเลขโทรศัพท์" required>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </div>
    </form>
@endsection
