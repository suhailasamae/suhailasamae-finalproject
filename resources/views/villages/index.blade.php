@extends('layouts.app')
   
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">หมู่บ้าน</h1>
        <a href="{{ route('villages.create') }}" class="btn btn-primary">เพิ่มหมู่บ้าน</a>
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
                <th>รหัสหมู่บ้าน</th>
                <th>ชื่อหมู่บ้าน</th>
                <!-- <th>จำนวนประชากร</th>
                <th>จำนวนครัวเรือน</th> -->
                <th>การจัดการ</th>
            </tr>
        </thead>
        <tbody>
            @if($villages->count() > 0)
                @foreach($villages as $village)
                    <tr>
                        <td class="align-middle">{{ $village->village_id }}</td>
                        <td class="align-middle">{{ $village->village_name }}</td>
                        <!-- <td class="align-middle">{{ $village->pop }}</td>
                        <td class="align-middle">{{ $village->hh_count }}</td>   -->
                        <td class="align-middle ">
                            <div class="btn-group " role="group" aria-label="Village Actions">
                                <a href="{{ route('villages.show', $village->village_id) }}" type="button" class="btn btn-secondary">รายละเอียด </a> 
                                <a href="{{ route('villages.edit', $village->village_id) }}" type="button" class="btn btn-warning ">แก้ไข</a>
                                <form action="{{ route('villages.destroy', $village->village_id) }}" method="POST" onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบหมู่บ้านนี้?')">
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
                    <td class="text-center" colspan="5">ไม่พบหมู่บ้าน</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
