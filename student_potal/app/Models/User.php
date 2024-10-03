<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
    use Notifiable;

    protected $table =  'users';
    protected $fillable = [
      'name',
      'email',
      'mobile',
      'password',
      'profile_picture',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function leaveRequests()
    {
        return $this->hasMany(LeaveRequest::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
