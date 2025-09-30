<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'class'; // karena default Laravel pakai 'classrooms'

    protected $fillable = [
        'class_name',
    ];

    // Relasi: 1 kelas punya banyak siswa
    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}
