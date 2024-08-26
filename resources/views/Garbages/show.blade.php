@extends('layouts.app')


@section('contents')
    <h1 class="mb-0">รายละเอียดการกำจัดขยะ</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ชื่อสถานที่</label>
            <input type="text" name="loc_name" class="form-control" value="{{ $garbage->loc_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">วิธีการกำจัด</label>
            <input type="text" name="disp_method" class="form-control" value="{{ $garbage->disp_method }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">วันที่กำจัด</label>
            <input type="text" name="date" class="form-control" value="{{ $garbage->date }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">ปริมาณขยะ</label>
            <input type="text" name="waste_amt" class="form-control" value="{{ $garbage->waste_amt }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ที่อยู่</label>
            <input type="text" name="addr" class="form-control" value="{{ $garbage->addr }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">ผู้ดูแล</label>
            <input type="text" name="caretaker" class="form-control" value="{{ $garbage->caretaker }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">เบอร์โทร</label>
            <input type="text" name="phone" class="form-control" value="{{ $garbage->phone }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">สร้างเมื่อ</label>
            <input type="text" name="created_at" class="form-control" value="{{ $garbage->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">แก้ไขเมื่อ</label>
            <input type="text" name="updated_at" class="form-control" value="{{ $garbage->updated_at }}" readonly>
        </div>
    </div>
@endsection
