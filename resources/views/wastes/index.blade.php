@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">ข้อมูลการเก็บขยะ</h1>
        <a href="{{ route('wastes.create') }}" class="btn btn-primary">เพิ่มข้อมูลขยะ</a>
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
                <th>หมู่บ้าน</th>
                <th>วันที่เก็บขยะ</th>
                <th>ปริมาณขยะทั้งหมด</th>
                <!-- <th>ขยะทั่วไป</th>
                <th>ขยะอินทรีย์</th>
                <th>ขยะรีไซเคิล</th>
                <th>ขยะอันตราย</th>
                <th>ขยะติดเชื้อ</th>
                <th>กากอุตสาหกรรม</th>
                <th>ขยะอิเล็คทรอนิค</th> -->
                <th>การจัดการ</th>
            </tr>
        </thead>
        <tbody>
            @forelse($wastes as $waste)
                <tr>
                    <td class="align-middle">{{ $waste->village->village_name ?? 'ไม่ระบุ' }}</td>
                    <td class="align-middle">{{ \Carbon\Carbon::parse($waste->date)->format('d/m/Y') }}</td>
                    <td class="align-middle">{{ number_format($waste->total_waste) }}</td>
                    <!-- <td class="align-middle">{{ number_format($waste->gen_waste) }}</td>
                    <td class="align-middle">{{ number_format($waste->org_waste) }}</td>
                    <td class="align-middle">{{ number_format($waste->rec_waste) }}</td>
                    <td class="align-middle">{{ number_format($waste->haz_waste) }}</td>
                    <td class="align-middle">{{ number_format($waste->inf_waste) }}</td>
                    <td class="align-middle">{{ number_format($waste->ind_waste) }}</td>
                    <td class="align-middle">{{ number_format($waste->e_waste) }}</td> -->
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Waste Actions">
                            <a href="{{ route('wastes.show', $waste->id) }}" class="btn btn-secondary me-1">รายละเอียด</a>
                            <a href="{{ route('wastes.edit', $waste->id) }}" class="btn btn-warning me-1">แก้ไข</a>
                            <form action="{{ route('wastes.destroy', $waste->id) }}" method="POST" onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลขยะนี้?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">ลบ</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="11">ไม่พบข้อมูลการเก็บขยะ</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
