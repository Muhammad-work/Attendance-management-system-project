<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LeaveRequestController extends Controller
{
    public function viewLeave(){
        return view('pages.leave');
    }

    public function leaveStore(Request $req){
        $userId = Auth::id(); 
        $today = Carbon::today(); 

        $attendance = LeaveRequest::where('user_id', $userId)
            ->whereDate('created_at', $today)
            ->first();

        if ($attendance) {
            return back()->with('error', 'You have already submit leave today.');
        }

        LeaveRequest::create([
            'user_id' => $userId,
            'reason' => $req->reason,
            'start_date' => $req->start_date, 
            'end_date' => $req->end_date, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'leave submit successfully.');

    }

    public function viewLeaveTable(){

        $leave = LeaveRequest::with('user')->get();

        return view('admin.leaveTable',compact('leave'));
    }
    
    public function storeLeaveStatus(Request $req,string $id){
       $leave = LeaveRequest::find($id);

       $leave->update([
          'status' => $req->status,
       ]);
       return redirect()->route('viewLeaveTable');
    }
}
