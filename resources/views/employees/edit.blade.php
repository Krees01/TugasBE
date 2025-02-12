@extends('layouts.app')

@section('title', 'Edit Karyawan')

@section('content')
<div class="container">
    <h2>Edit Karyawan</h2>
    <form action="{{ url('/employees/' . $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama:</label>
            <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
        </div>
        <div class="mb-3">
            <label>Umur:</label>
            <input type="number" name="age" class="form-control" value="{{ $employee->age }}" required>
        </div>
        <div class="mb-3">
            <label>Alamat:</label>
            <input type="text" name="address" class="form-control" value="{{ $employee->address }}" required>
        </div>
        <div class="mb-3">
            <label>Nomor Telepon:</label>
            <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
