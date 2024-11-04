@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="form-container">
        <h1 class="text-center">Biodata Mahasiswa</h1>

        <!-- Form dengan Bootstrap -->
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <div class="mb-3">
                <label for="nim" class="form-label">NIM:</label>
                <input type="text" name="nim" id="nim" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Name:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    
@endsection