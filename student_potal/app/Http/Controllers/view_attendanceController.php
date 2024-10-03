<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\map;

class view_attendanceController extends Controller
{
    public function viewAttendance()
    {
        $users = User::with(['attendance', 'leaveRequests']) 
            ->where('id', Auth::id()) 
            ->get();
    //    return $users;
        $userData = $users->map(function ($user) {
            return [
                'user' => $user,
                'attendance' => $user->attendance, 
                'leaveRequests' => $user->leaveRequests, 
            ];
        });

            return view('pages.attendance', compact('userData'));
       
    }


}
