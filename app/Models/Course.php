<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'prerequisite',
        'instructor_id',
        'material_id',
        'status',
        'original_price',
        'discounted_price',
        'course_count',
        'video_count',
        'thumbnail',
        'rating'
    ];

}
