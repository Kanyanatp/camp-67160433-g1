@extends('template.default')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">แก้ไขข้อมูล Pokemon: {{ $pokemon->name }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('pokedexs.update', $pokemon->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label font-weight-bold">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $pokemon->name }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label font-weight-bold">Type</label>
                        <input type="text" name="type" class="form-control" value="{{ $pokemon->type }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label font-weight-bold">Species</label>
                        <input type="text" name="species" class="form-control" value="{{ $pokemon->species }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label font-weight-bold">Height</label>
                        <input type="number" step="0.1" name="height" class="form-control" value="{{ $pokemon->height }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label font-weight-bold">Weight</label>
                        <input type="number" step="0.1" name="weight" class="form-control" value="{{ $pokemon->weight }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label font-weight-bold">HP</label>
                        <input type="number" name="hp" class="form-control" value="{{ $pokemon->hp }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label font-weight-bold">Attack</label>
                        <input type="number" name="attack" class="form-control" value="{{ $pokemon->attack }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label font-weight-bold">Defense</label>
                        <input type="number" name="defense" class="form-control" value="{{ $pokemon->defense }}">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label font-weight-bold">Image URL</label>
                    <input type="text" name="image_url" class="form-control" value="{{ $pokemon->image_url }}">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success px-4">อัปเดตข้อมูล</button>
                    <a href="{{ route('pokedexs.index') }}" class="btn btn-secondary px-4">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
