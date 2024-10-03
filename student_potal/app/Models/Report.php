<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'from_date', 'to_date', 'total_present', 'total_absent', 'total_leave', 'grade'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
