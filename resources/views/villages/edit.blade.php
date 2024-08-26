@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">แก้ไขข้อมูลหมู่บ้าน</h1>
    <hr />
    <form action="{{ route('villages.update', $village->village_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ชื่อหมู่บ้าน</label>
                <input type="text" name="village_name" class="form-control" placeholder="ชื่อหมู่บ้าน" value="{{ $village->village_name }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">จำนวนประชากร</label>
                <input type="text" name="pop" class="form-control" placeholder="จำนวนประชากร" value="{{ $village->pop }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">จำนวนครัวเรือน</label>
                <input type="text" name="hh_count" class="form-control" placeholder="จำนวนครัวเรือน" value="{{ $village->hh_count }}" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
