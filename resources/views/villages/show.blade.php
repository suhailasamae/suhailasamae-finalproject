@extends('layouts.app')

@section('contents')
    <h1 class="mb-0">รายละเอียดหมู่บ้าน</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ชื่อหมู่บ้าน</label>
            <input type="text" name="village_name" class="form-control" value="{{ $village->village_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">จำนวนประชากร</label>
            <input type="text" name="pop" class="form-control" value="{{ $village->pop }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">จำนวนครัวเรือน</label>
            <input type="text" name="hh_count" class="form-control" value="{{ $village->hh_count }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">สร้างเมื่อ</label>
            <input type="text" name="created_at" class="form-control" value="{{ $village->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">แก้ไขเมื่อ</label>
            <input type="text" name="updated_at" class="form-control" value="{{ $village->updated_at }}" readonly>
        </div>
    </div>
@endsection
