@extends('layouts.app')

@section('contents')
    <h1 class="mb-0 ">เพิ่มหมู่บ้าน</h1>
    <hr />
    <div class="d-flex justify-content-center">
        <form action="{{ route('villages.store') }}" method="POST" enctype="multipart/form-data" class="w-50">
            @csrf
            <div class="row mb-3">
                <div class="col-md-4 text-end">
                    <label for="village_name" class="form-label">ชื่อหมู่บ้าน</label>
                </div>
                <div class="col-md-8">
                    <input type="text" name="village_name" class="form-control" id="village_name" placeholder="กรอกชื่อหมู่บ้าน" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 text-end">
                    <label for="pop" class="form-label">จำนวนประชากร</label>
                </div>
                <div class="col-md-8">
                    <input type="text" name="pop" class="form-control" id="pop" placeholder="กรอกจำนวนประชากร" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 text-end">
                    <label for="hh_count" class="form-label">จำนวนครัวเรือน</label>
                </div>
                <div class="col-md-8">
                    <input type="text" name="hh_count" class="form-control" id="hh_count" placeholder="กรอกจำนวนครัวเรือน" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('villages.index') }}" class="btn btn-secondary me-2">ยกเลิก</a>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </div>
        </form>
    </div>
@endsection
