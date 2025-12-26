@extends('template.default')
@section('title', 'ผลลัพธ์')

@section('content')
<div class="card border-0 mt-4">
    <div class="card-header bg-white border-0 pt-4 pb-0">
        <h4 class="text-dark fw-bold">ข้อมูลที่ได้รับ</h4>
    </div>

    <div class="card-body">
        <ul class="list-unstyled">
            <li><strong>ชื่อ-สกุล:</strong> {{ $data['fname'] }} {{ $data['lname'] }}</li>
            <li><strong>วันเกิด:</strong> {{ $data['birthday'] }}</li>
            <li><strong>อายุ:</strong> {{ $data['age'] }} ปี</li>
            <li><strong>เพศ:</strong> {{ $data['gender'] }}</li>
            <li><strong>ที่อยู่:</strong> {{ $data['address'] }}</li>
            <li><strong>สีที่ชอบ:</strong> {{ $data['fav_color'] }}</li>
            <li><strong>แนวเพลง:</strong>
                @if(isset($data['music']))
                    {{ implode(', ', $data['music']) }}
                @else
                    -
                @endif
            </li>
        </ul>
       <a href="{{ url('/workshop/form') }}" class="btn btn-outline-primary btn-sm">
    กลับไปหน้าฟอร์ม
</a>
    </div>
</div>
@endsection
