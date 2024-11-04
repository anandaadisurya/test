@extends('layouts.master')

@section('title', 'Read')

@section('content')
<!-- Data Mahasiswa -->
<div class="table-responsive mt-5">
        <h2 class="text-center">Data Mahasiswa</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel dengan Bootstrap -->
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->address }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->message }}</td>
                    <td>
                    <a href="/home" class="btn btn-info btn-sm">Tambah</a>
                        <a href="{{ route('edit', $mahasiswa->id) }}"  class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('destroy', $mahasiswa->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection