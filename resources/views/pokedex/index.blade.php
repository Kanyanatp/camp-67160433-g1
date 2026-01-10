@extends('template.default')

@section('content')
    <h1>Pokedex Create</h1>
    {{-- ฟอร์มสำหรับเพิ่มข้อมูล --}}
    <form action="{{ route('pokedexs.store') }}" method="post">
        @csrf
        <div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Pokedex Create</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('pokedexs.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label font-weight-bold">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="ชื่อโปเกมอน" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label font-weight-bold">Type</label>
                    <input type="text" name="type" class="form-control" placeholder="ประเภท (เช่น Fire, Water)" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label font-weight-bold">Species</label>
                    <input type="text" name="species" class="form-control" placeholder="สายพันธุ์" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-2 col-6">
                    <label class="form-label font-weight-bold">Height</label>
                    <input type="number" step="0.1" name="height" class="form-control" placeholder="ส่วนสูง">
                </div>
                <div class="col-md-2 col-6">
                    <label class="form-label font-weight-bold">Weight</label>
                    <input type="number" step="0.1" name="weight" class="form-control" placeholder="น้ำหนัก">
                </div>
                <div class="col-md-2 col-4">
                    <label class="form-label font-weight-bold">HP</label>
                    <input type="number" name="hp" class="form-control" placeholder="HP">
                </div>
                <div class="col-md-3 col-4">
                    <label class="form-label font-weight-bold">Attack</label>
                    <input type="number" name="attack" class="form-control" placeholder="Attack">
                </div>
                <div class="col-md-3 col-4">
                    <label class="form-label font-weight-bold">Defense</label>
                    <input type="number" name="defense" class="form-control" placeholder="Defense">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label font-weight-bold">Image URL</label>
                <input type="text" name="image_url" class="form-control" placeholder="วางลิงก์รูปภาพที่นี่">
            </div>

            <button type="submit" class="btn btn-primary px-4">บันทึกข้อมูล Pokemon</button>
        </form>
    </div>
</div>

    <hr>

    <h1>Pokemon Lists</h1>
    {{-- ตารางแสดงข้อมูล --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Type</th>
                <th>HP / ATK / DEF</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pokedexs as $item)
            <tr>
               <td>{{ $loop->iteration }}</td>
                <td>
                    @if($item->image_url)
                        <img src="{{ $item->image_url }}" alt="{{ $item->name }}" style="width: 80px; height: auto; border-radius: 5px;">
                    @else
                        <span class="text-muted">No Image</span>
                    @endif
                </td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->hp }} / {{ $item->attack }} / {{ $item->defense }}</td>
                <td>
                    {{-- ปุ่มแก้ไข --}}
                    <a href="{{ route('pokedexs.edit', $item->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>

                    {{-- ฟอร์มสำหรับลบ --}}
                    <form action="{{ route('pokedexs.destroy', $item->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบ?')">ลบ</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
