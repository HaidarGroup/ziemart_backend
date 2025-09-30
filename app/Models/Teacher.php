<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nip',
        'gender',
    ];

    // Relasi: guru bisa punya banyak akun
    public function accounts()
    {
        return $this->hasMany(Account::class, 'teacher_id');
    }

    // Relasi: guru bisa jadi buyer
    public function buyers()
    {
        return $this->hasMany(Buyer::class, 'teacher_id');
    }

    // Relasi: guru bisa jadi seller
    public function sellers()
    {
        return $this->hasMany(Seller::class, 'teacher_id');
    }
}
