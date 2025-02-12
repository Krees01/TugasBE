@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Karyawan</h2>
    <form action="{{ url('/employees') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Umur:</label>
            <input type="number" name="age" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat:</label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nomor Telepon:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
