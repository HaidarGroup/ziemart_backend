<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'student_id',
        'teacher_id',
        'account_id',
    ];

    // Relasi ke student
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    // Relasi ke teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    // Relasi ke account
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
