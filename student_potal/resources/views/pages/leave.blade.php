@extends('layouts.app')

@section('title')
    Leave Form
@endsection

@section('nav')
    <nav class="navbar navbar-light bg-light p-3">
        <div class="container-fluid">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" style="width: 120px" alt="">
            </a>
            <h2>Attendance Management System</h2>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Hi {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Request Leave</h2>

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('leaveStore') }}">
                    @csrf

                    <!-- Start Date -->
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" name="start_date" id="start_date"
                            class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}"
                            required>
                        @error('start_date')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- End Date -->
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" name="end_date" id="end_date"
                            class="form-control @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}"
                            required>
                        @error('end_date')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Reason for Leave -->
                    <div class="mb-3">
                        <label for="reason" class="form-label">Reason for Leave</label>
                        <textarea name="reason" id="reason" class="form-control @error('reason') is-invalid @enderror" rows="3"
                            required>{{ old('reason') }}</textarea>
                        @error('reason')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit Leave Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
