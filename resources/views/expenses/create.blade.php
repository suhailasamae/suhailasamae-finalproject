@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">เพิ่มค่าใช้จ่าย</h1>
    <hr />
    <form action="{{ route('expenses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="per_id" class="form-label">พนักงาน</label>
                <select name="per_id" class="form-control" id="per_id" required>
                    <option value="">เลือกพนักงาน</option>
                    @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->per_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="exp_type" class="form-label">ประเภทค่าใช้จ่าย</label>
                <select name="exp_type" class="form-control" id="exp_type" required>
                    <option value="">เลือกประเภทค่าใช้จ่าย</option>
                    <option value="Fuel">ค่าน้ำมัน</option>
                    <option value="Wages">ค่าจ้าง</option>
                    <option value="Repairs">ค่าซ่อมแซม</option>
                    <!-- Add other expense types as needed -->
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="amount" class="form-label">จำนวนเงิน</label>
                <input type="text" name="amount" class="form-control" id="amount" placeholder="กรอกจำนวนเงิน" required>
            </div>
            <div class="col">
                <label for="exp_date" class="form-label">วันที่เกิดค่าใช้จ่าย</label>
                <input type="date" name="exp_date" class="form-control" id="exp_date" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="pay_method" class="form-label">วิธีการชำระเงิน</label>
                <select name="pay_method" class="form-control" id="pay_method" required>
                    <option value="">เลือกวิธีการชำระเงิน</option>
                    <option value="Cash">เงินสด</option>
                    <option value="Credit Card">บัตรเครดิต</option>
                    <option value="Bank Transfer">โอนเงินผ่านธนาคาร</option>
                    <!-- Add other payment methods as needed -->
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="desc" class="form-label">รายละเอียดเพิ่มเติม</label>
                <textarea name="desc" class="form-control" id="desc" placeholder="กรอกรายละเอียดเพิ่มเติม"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </div>
    </form>
@endsection
