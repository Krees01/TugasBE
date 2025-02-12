@extends('layouts.app')

@section('title', 'Daftar Karyawan')

@section('content')
<div class="container">
    <h2>Daftar Karyawan</h2>
    <a href="{{ url('/employees/create') }}" class="btn btn-primary">Tambah Karyawan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->age }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->phone }}</td>
                <td>
                    <a href="{{ url('/employees/' . $employee->id . '/edit') }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('/employees/' . $employee->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
