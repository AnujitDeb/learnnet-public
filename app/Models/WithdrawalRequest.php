<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawalRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'instructor_id',
        'payment_method',
        'account_number',
        'amount',
        'status',
        'instructor_name',
        'instructor_phone'
    ];
}
