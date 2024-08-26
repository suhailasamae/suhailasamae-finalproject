@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">รถเก็บขยะ</h1>
        <a href="{{ route('vehicles.create') }}" class="btn btn-primary">เพิ่มรถเก็บขยะ</a>
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
                <th>รหัสรถ</th>
                <th>ประเภทของรถ</th>
                <th>ทะเบียนรถ</th>
                <th>วันที่บำรุงรักษา</th>
                <th>สถานะรถ</th>
                <th>การจัดการ</th>
            </tr>
        </thead>
        <tbody>
            @if($vehicles->count() > 0)
                @foreach($vehicles as $vehicle)
                    <tr>
                        <td class="align-middle">{{ $vehicle->id }}</td>
                        <td class="align-middle">{{ $vehicle->veh_type }}</td>
                        <td class="align-middle">{{ $vehicle->license }}</td>
                        <td class="align-middle">{{ \Carbon\Carbon::parse($vehicle->last_service)->format('d/m/Y') }}</td>
                        <td class="align-middle">{{ $vehicle->status }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Vehicle Actions">
                                <a href="{{ route('vehicles.show', $vehicle->id) }}" type="button" class="btn btn-secondary">รายละเอียด</a>
                                <a href="{{ route('vehicles.edit', $vehicle->id) }}" type="button" class="btn btn-warning">แก้ไข</a>
                                <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบรถเก็บขยะนี้?')">
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
                    <td class="text-center" colspan="6">ไม่พบรถเก็บขยะ</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
