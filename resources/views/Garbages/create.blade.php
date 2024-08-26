@extends('layouts.app')

@section('contents')
    <h1 class="mb-0">การกำจัดขยะ</h1>
    <hr />
    <form action="{{ route('garbages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="loc_name" class="form-label">ชื่อสถานที่</label>
                <input type="text" name="loc_name" class="form-control" id="loc_name" placeholder="กรอกชื่อสถานที่" required>
            </div>
            <div class="col">
                <label for="disp_method" class="form-label">วิธีการกำจัด</label>
                <input type="text" name="disp_method" class="form-control" id="disp_method" placeholder="กรอกวิธีการกำจัด" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="date" class="form-label">วันที่กำจัด</label>
                <input type="date" name="date" class="form-control" id="date" placeholder="กรอกวันที่กำจัด" required>
            </div>
            <div class="col">
                <label for="waste_amt" class="form-label">ปริมาณขยะ</label>
                <input type="number" step="0.01" name="waste_amt" class="form-control" id="waste_amt" placeholder="กรอกปริมาณขยะ" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="addr" class="form-label">ที่อยู่</label>
                <input type="text" name="addr" class="form-control" id="addr" placeholder="กรอกที่อยู่" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="caretaker" class="form-label">ผู้ดูแล</label>
                <input type="text" name="caretaker" class="form-control" id="caretaker" placeholder="กรอกชื่อผู้ดูแล" required>
            </div>
            <div class="col">
                <label for="phone" class="form-label">เบอร์โทร</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="กรอกเบอร์โทร" required>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </div>
    </form>
@endsection
