<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index()
    {
        return view('auth.RegisterForm');
    }

    public function register(Request $req)
    {
         $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|unique:users,mobile',
            'password' => 'required|confirmed|max:8|min:6',
         ]);
        
         $picturePath = $req->pictuer->store('user_images', 'public');

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'password' => Hash::make($req->password),
            'profile_picture' => $picturePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function login(Request $req){
        
       $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
      
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->role === 'admin') {
                return redirect()->route('dashbord'); 
            } else{
                return redirect()->route('home'); 
            }
        }
   
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
