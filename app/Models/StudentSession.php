<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSession extends Model
{
    use HasFactory;
    protected $table = 'student_sessions';
    protected $fillable = [
        'session',
        'is_active'
    ];
}
