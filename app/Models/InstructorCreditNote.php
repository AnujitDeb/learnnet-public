<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorCreditNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'instructor_id',
        'status',
        'account_number',
        'transaction_method'
    ];
}
