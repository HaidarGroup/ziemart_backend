<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'fullname'
    ];



    // Relasi ke account
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
