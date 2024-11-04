@extends('layouts.master')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Biodata Mahasiswa</h1>

    <!-- Form Edit Mahasiswa -->
    <form method="POST" action="{{ route('update', $mahasiswa->id) }}" class="mx-auto" style="max-width: 600px;">
        @csrf

        <!-- NIM -->
        <div class="mb-3">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" name="nim" id="nim" value="{{ $mahasiswa->nim }}" class="form-control" required>
        </div>

        <!-- Name -->
        <div class="mb-3">
            <label for="nama" class="form-label">Name:</label>
            <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama }}" class="form-control" required>
        </div>

        <!-- Address -->
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" name="address" id="address" value="{{ $mahasiswa->address }}" class="form-control" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" value="{{ $mahasiswa->email }}" class="form-control" required>
        </div>

        <!-- Message -->
        <div class="mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea name="message" id="message" rows="4" class="form-control" required>{{ $mahasiswa->message }}</textarea>
        </div>

        <!-- Button Update -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('read') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection