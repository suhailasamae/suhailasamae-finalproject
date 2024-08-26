@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">แก้ไขข้อมูลค่าใช้จ่าย</h1>
    <hr />
    <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label for="per_id" class="form-label">พนักงาน</label>
                <select name="per_id" class="form-control" id="per_id" required>
                    <option value="">เลือกพนักงาน</option>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}" {{ $expense->per_id == $employee->id ? 'selected' : '' }}>
                            {{ $employee->per_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label for="exp_type" class="form-label">ประเภทค่าใช้จ่าย</label>
                <select name="exp_type" class="form-control" id="exp_type" required>
                    <option value="">เลือกประเภทค่าใช้จ่าย</option>
                    <option value="Fuel" {{ $expense->exp_type == 'Fuel' ? 'selected' : '' }}>ค่าน้ำมัน</option>
                    <option value="Wages" {{ $expense->exp_type == 'Wages' ? 'selected' : '' }}>ค่าจ้าง</option>
                    <option value="Repairs" {{ $expense->exp_type == 'Repairs' ? 'selected' : '' }}>ค่าซ่อมแซม</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="amount" class="form-label">จำนวนเงิน</label>
                <input type="text" name="amount" class="form-control" id="amount" placeholder="จำนวนเงิน" value="{{ $expense->amount }}" required>
            </div>
            <div class="col mb-3">
                <label for="exp_date" class="form-label">วันที่เกิดค่าใช้จ่าย</label>
                <input type="date" name="exp_date" class="form-control" id="exp_date" value="{{ $expense->exp_date }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="pay_method" class="form-label">วิธีการชำระเงิน</label>
                <select name="pay_method" class="form-control" id="pay_method" required>
                    <option value="">เลือกวิธีการชำระเงิน</option>
                    <option value="Cash" {{ $expense->pay_method == 'Cash' ? 'selected' : '' }}>เงินสด</option>
                    <option value="Credit Card" {{ $expense->pay_method == 'Credit Card' ? 'selected' : '' }}>บัตรเครดิต</option>
                    <option value="Bank Transfer" {{ $expense->pay_method == 'Bank Transfer' ? 'selected' : '' }}>โอนเงินผ่านธนาคาร</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="desc" class="form-label">รายละเอียดเพิ่มเติม</label>
                <textarea name="desc" class="form-control" id="desc" placeholder="รายละเอียดเพิ่มเติม">{{ $expense->desc }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </
