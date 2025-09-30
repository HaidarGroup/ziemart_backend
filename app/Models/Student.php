<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nis',
        'gender',
        'class_id',
    ];

    // Relasi: siswa milik satu kelas
    public function classroom()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    // Relasi: siswa bisa punya banyak akun
    public function accounts()
    {
        return $this->hasMany(Account::class, 'student_id');
    }

    // Relasi: siswa bisa jadi buyer
    public function buyers()
    {
        return $this->hasMany(Buyer::class, 'student_id');
    }

    // Relasi: siswa bisa jadi seller
    public function sellers()
    {
        return $this->hasMany(Seller::class, 'student_id');
    }
}
