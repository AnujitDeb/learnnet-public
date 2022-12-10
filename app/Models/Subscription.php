<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_method',
        'transaction_id',
        'course_id',
        'student_id',
        'payable_amount',
        'status'
    ];
}
