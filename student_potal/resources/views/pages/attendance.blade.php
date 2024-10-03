@extends('layouts.app')

@section('title')
    Student Attendance
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
                <h2 class="text-center mb-4">Your Attendance Records</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Attendance Status</th>
                                {{-- <th>Leave Status</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($userData->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">No record found</td>
                                </tr>
                            @else
                                @foreach ($userData as $data)
                                    @foreach ($data['attendance'] as $attendance)
                                        <tr>
                                            <td>{{ $data['user']->id }}</td>
                                            <td>{{ $data['user']->name }}</td>
                                            <td>{{ $attendance->date ?? 'N/A' }}</td>
                                            <td>
                                                @if ($attendance)
                                                    @if ($attendance->status === 'present')
                                                        <span class="badge bg-success">Present</span>
                                                    @elseif($attendance->status === 'absent')
                                                        <span class="badge bg-danger">Absent</span>
                                                    @else
                                                        <span class="badge bg-warning">Leave</span>
                                                    @endif
                                                @else
                                                    <span class="badge bg-secondary">No Attendance Record</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endif
                        </tbody>
                    </table>

                    <h3 class="text-center mb-4 mt-5">Leave Requests</h3>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Reason</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['leaveRequests'] as $leaveRequest)
                                <tr>
                                    <td>{{ $leaveRequest->start_date }}</td>
                                    <td>{{ $leaveRequest->end_date }}</td>
                                    <td>{{ $leaveRequest->reason }}</td>
                                    <td>
                                        @if ($leaveRequest->status === 'pending')
                                            <span class="badge bg-warning">Pending</span>
                                        @elseif($leaveRequest->status === 'approved')
                                            <span class="badge bg-success">Approved</span>
                                        @else
                                            <span class="badge bg-danger">Rejected</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="text-center mt-4">
                    <a href="{{ route('home') }}" class="btn btn-secondary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
