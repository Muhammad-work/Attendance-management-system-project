<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Attendance;
class attendanceController extends Controller
{
    public function markAttendance(Request $request)
    {

        $userId = Auth::id(); 
        $today = Carbon::today(); 

        $attendance = Attendance::where('user_id', $userId)
            ->whereDate('created_at', $today)
            ->first();

        if ($attendance) {
            return back()->with('error', 'You have already marked attendance today.');
        }
        $date = date('Y-m-d');
        Attendance::create([
            'user_id' => $userId,
            'date' => $date, 
            'status' => $request->attendance, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Attendance marked successfully.');
    }

    public function viewAttendanceTable(){
        $attendance = Attendance::with('user')->get();
        return view('admin.attendanceTable',compact('attendance'));
    }
}
