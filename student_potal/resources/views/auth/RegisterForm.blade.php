@extends('layouts.app')

@section('title')
    Register Form
@endsection


@section('content')
    <div class="continer-wappaer">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">User Registration</h2>

                    <form method="POST" action="{{ route('register-store') }}" class="border border-1 p-5 rounded-5"
                        autocomplete="off" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                 >
                            @error('name')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                >
                            @error('email')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="Mobile" class="form-label">Mobile</label>
                            <input type="tel" name="mobile" id="Mobile"
                                class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}">
                            @error('mobile')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="Pictuer" class="form-label">Pictuer</label>
                            <input class="form-control" type="file" id="Pictuer" name="pictuer"
                                class="form-control @error('pictuer') is-invalid @enderror" value="{{ old('pictuer') }}">
                            @error('pictuer')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password"
                                class="form-control @error('password') is-invalid @enderror" >
                            @error('password')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control" >
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                        <div class="row  mt-4 text-center">
                            <div class="ccolmb-12">
                                <p><a href="{{ route('login') }}">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
