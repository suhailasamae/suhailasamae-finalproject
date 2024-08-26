@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">ค่าใช้จ่าย</h1>
        <a href="{{ route('expenses.create') }}" class="btn btn-primary">เพิ่มค่าใช้จ่าย</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>รหัสค่าใช้จ่าย</th>
                <th>พนักงาน</th>
                <th>ประเภทค่าใช้จ่าย</th>
                <th>จำนวนเงิน</th>
                <th>วันที่</th>
                <th>การจัดการ</th>
            </tr>
        </thead>
        <tbody>
            @if($expenses->count() > 0)
                @foreach($expenses as $expense)
                    <tr>
                        <td class="align-middle">{{ $expense->id }}</td>
                        <td class="align-middle">{{ $expense->employee->per_name }}</td>
                        <td class="align-middle">{{ $expense->exp_type }}</td>
                        <td class="align-middle">{{ $expense->amount }}</td>
                        <td class="align-middle">{{ $expense->exp_date }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Expense Actions">
                                <a href="{{ route('expenses.show', $expense->id) }}" type="button" class="btn btn-secondary">รายละเอียด</a>
                                <a href="{{ route('expenses.edit', $expense->id) }}" type="button" class="btn btn-warning">แก้ไข</a>
                                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบค่าใช้จ่ายนี้?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">ลบ</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">ไม่พบค่าใช้จ่าย</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
