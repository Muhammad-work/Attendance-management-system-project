<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userTableController extends Controller
{

    public function  viewUserTable()
    {

        $users = User::where('role', 'student')->get();

        return view('admin.user_table', compact('users'));
    }

    public function editUserTable(string $id)
    {
        $user = User::find($id);
        return view('admin.editUser', compact('user'));
    }

    public function updateUserTable(Request $req, string $id)
    {
    
        $user = User::find($id);

        if ($req->hasFile('picture')) {
            $img_path = public_path('storage/' . $user->profile_picture);
    
            if (file_exists($img_path)) {
                @unlink($img_path);
            }
    
            $path = $req->file('picture')->store('user_images', 'public');
        } else {
            $path = $user->profile_picture;
        }
    
        $user->update([
            'name' => $req->name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'profile_picture' => $path,
        ]);
    
        return redirect()->route('view_user')->with('success', 'Data updated successfully');
    }
    


    public function deleteUser($id)
    {
        $user = User::with(['attendance', 'leaveRequests'])->find($id);
        
        if ($user) {
            $img_path = public_path('storage/' . $user->profile_picture);
            
            if (file_exists($img_path)) {
                unlink($img_path); 
            }
    
            if ($user->attendance) {
                $user->attendance()->delete(); 
            }
            
            if ($user->leaveRequests) {
                $user->leaveRequests()->delete(); 
            }
    
            $user->delete();
    
            return redirect()->route('view_user')->with('successdel', 'User deleted successfully');
        } else {
            return redirect()->route('view_user')->with('error', 'User not found');
        }
    }
        
}
