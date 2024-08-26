@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">พนักงาน</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary">เพิ่มพนักงาน</a>
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
                <th>ชื่อพนักงาน</th>
                <th>ทะเบียนรถ</th>
                <th>หมายเลขโทรศัพท์</th>
                <th>การจัดการ</th>
            </tr>
        </thead>
        <tbody>
            @if($employees->count() > 0)
                @foreach($employees as $employee)
                    <tr>
                        <td class="align-middle">{{ $employee->per_name }}</td>
                        <td class="align-middle">{{ $employee->veh_license }}</td>
                        <td class="align-middle">{{ $employee->phone }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Employee Actions">
                                <a href="{{ route('employees.show', $employee->id) }}" type="button" class="btn btn-secondary">รายละเอียด</a>
                                <a href="{{ route('employees.edit', $employee->id) }}" type="button" class="btn btn-warning">แก้ไข</a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบพนักงานนี้?')">
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
                    <td class="text-center" colspan="5">ไม่พบพนักงาน</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
