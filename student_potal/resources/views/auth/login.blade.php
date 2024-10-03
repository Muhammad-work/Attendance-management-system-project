@extends('layouts.app')

@section('title')
    Login Form
@endsection

@section('content')
 <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 mt-5">
            <h2 class="text-center mb-4">User Login</h2>
    
            <form method="POST" action="{{ route('login-store') }}" class="border border-1 p-5 rounded-5 " autocomplete="off">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="row  mt-4 text-center">
                    <div class="ccolmb-12">
                        <p>Create New Account? <a href="{{ route('index') }}">Click Register</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </div>
@endsection