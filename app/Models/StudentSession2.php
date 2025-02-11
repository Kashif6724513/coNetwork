<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSession2 extends Model
{
    use HasFactory;
    protected $table = 'student_sessions2';
    protected $fillable = [
        'student_id',
        'student_sessions_id'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function session()
    {
        return $this->belongsTo(StudentSession::class ,'student_sessions_id', 'id');
    }
}
