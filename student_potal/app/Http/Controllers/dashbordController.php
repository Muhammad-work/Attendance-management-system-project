<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;

class dashbordController extends Controller
{
    public function viewDashbord()
    {
        $user = User::where('role' , 'student')->count();
        $attendance = Attendance::count();
        $leave = LeaveRequest::count();
        return view('admin.dashbord',['user' => $user, 'attendance' => $attendance,'leave' => $leave]);
    }
}
