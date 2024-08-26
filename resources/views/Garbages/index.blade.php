@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">การกำจัดขยะ</h1>
        <a href="{{ route('garbages.create') }}" class="btn btn-primary">เพิ่มข้อมูลขยะ</a>
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
                <th>ชื่อสถานที่</th>
                <th>วิธีการกำจัด</th>
                <th>วันที่กำจัด</th>
                <th>ปริมาณขยะ</th>
                <!-- <th>ที่อยู่</th>
                <th>ผู้ดูแล</th>
                <th>เบอร์โทร</th> -->
                <th>การจัดการ</th>
            </tr>
        </thead>
        <tbody>
            @if($garbages->count() > 0)
                @foreach($garbages as $garbage)
                    <tr>
                        <td class="align-middle">{{ $garbage->loc_name }}</td>
                        <td class="align-middle">{{ $garbage->disp_method }}</td>
                        <td class="align-middle">{{ $garbage->date }}</td>
                        <td class="align-middle">{{ $garbage->waste_amt }}</td>
                        <!-- <td class="align-middle">{{ $garbage->addr }}</td>
                        <td class="align-middle">{{ $garbage->caretaker }}</td>
                        <td class="align-middle">{{ $garbage->phone }}</td> -->
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Garbage Actions">
                                <a href="{{ route('garbages.show', $garbage->id) }}" type="button" class="btn btn-secondary">รายละเอียด</a>
                                <a href="{{ route('garbages.edit', $garbage->id) }}" type="button" class="btn btn-warning">แก้ไข</a>
                                <form action="{{ route('garbages.destroy', $garbage->id) }}" method="POST" onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลขยะนี้?')">
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
                    <td class="text-center" colspan="8">ไม่พบข้อมูลขยะ</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection