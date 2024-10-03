@extends('layouts.app')

@section('title')
    Home Page
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
    @if (session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success  text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center mt-2">
                <h3 class="mb-5">Today Attendance</h3>
                <div class="d-grid gap-3">

                    <form action="{{ route('attendance-mark') }}" method="POST">
                        @csrf
                        <input type="hidden" name="attendance" value="present">
                        <button type="submit" class="btn btn-success btn-lg" style="width: 100%">Mark
                            Attendance</a></button>
                    </form>


                    <a href="{{ route('leave') }}" class="btn btn-warning btn-lg">Mark Leave</a>


                    <a href="{{ route('attendance') }}" class="btn btn-primary btn-lg">View Attendance</a>
                </div>
            </div>
        </div>
    </div>
@endsection
