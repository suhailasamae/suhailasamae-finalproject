@extends('layouts.app')

@section('contents')
    <h1 class="mb-0">รายละเอียดค่าใช้จ่าย</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">พนักงาน</label>
            <input type="text" name="employee_name" class="form-control" value="{{ $expense->employee->per_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">ประเภทค่าใช้จ่าย</label>
            <input type="text" name="exp_type" class="form-control" value="{{ $expense->exp_type }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">จำนวนเงิน</label>
            <input type="text" name="amount" class="form-control" value="{{ $expense->amount }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">วันที่เกิดค่าใช้จ่าย</label>
            <input type="text" name="exp_date" class="form-control" value="{{ $expense->exp_date }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">วิธีการชำระเงิน</label>
            <input type="text" name="pay_method" class="form-control" value="{{ $expense->pay_method }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">รายละเอียดเพิ่มเติม</label>
            <textarea name="desc" class="form-control" readonly>{{ $expense->desc }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">สร้างเมื่อ</label>
            <input type="text" name="created_at" class="form-control" value="{{ $expense->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">แก้ไขเมื่อ</label>
            <input type="text" name="updated_at" class="form-control" value="{{ $expense->updated_at }}" readonly>
        </div>
    </div>
@endsection
